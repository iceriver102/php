<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Datatable extends CI_Model
{
    public $getData=array();
	public $aColumns=array();
	public $sIndexColumn='';
	public $sTable='';
    function __construct()
	{
		  parent::__construct();
		  $this->load->database();	
	}    
	
	public function limit()
	{
		$sLimit='';
		if ( isset( $this->getData['iDisplayStart'] ) && $this->getData['iDisplayLength'] != '-1' )
		{
			$sLimit = 'LIMIT '.intval( $this->getData['iDisplayStart'] ).', '.
				intval( $this->getData['iDisplayLength'] );
		}
		return $sLimit;
	}
	public function order()
	{
		$sOrder='';
		if ( isset( $this->getData['iSortCol_0'] ) )
		{
			$sOrder = 'ORDER BY  ';
			for ( $i=0 ; $i<intval( $this->getData['iSortingCols'] ) ; $i++ )
			{
				if ( $this->getData[ 'bSortable_'.intval($this->getData['iSortCol_'.$i]) ] == "true" )
				{
					$sOrder .= "`".$aColumns[ intval( $this->getData['iSortCol_'.$i] ) ]."` ".
						($this->getData['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
				}
			}
			
			$sOrder = substr_replace( $sOrder, '', -2 );
			if ( $sOrder == 'ORDER BY' )
			{
				$sOrder = '';
			}
		}
		return $sOrder;
	}
	public function where($where='')
	{
		$sWhere=$where;
		if ( isset($this->getData['sSearch']) && $this->getData['sSearch'] != '' )
		{
			$sWhere.=' And (';
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				if ( isset($this->getData['bSearchable_'.$i]) && $this->getData['bSearchable_'.$i] == "true" )
				{
					$sWhere .= '`'.$aColumns[$i].'` LIKE "%'.mysql_real_escape_string( $this->getData['sSearch'] ).'%" OR ';
				}
			}
			$sWhere = substr_replace( $sWhere, '', -3 );
			$sWhere .= ')';
		}
		
		/* Individual column filtering */
		for ( $i=0 ; $i<count($this->aColumns) ; $i++ )
		{
			if ( isset($this->getData['bSearchable_'.$i]) && $this->getData['bSearchable_'.$i] == 'true' && $this->getData['sSearch_'.$i] != '' )
			{
				if ( $sWhere == '' )
				{
					$sWhere = 'WHERE ';
				}
				else
				{
					$sWhere .= ' AND ';
				}
				$sWhere .= '`'.$aColumns[$i].'` LIKE "%'.mysql_real_escape_string($this->getData['sSearch_'.$i]).'%" ';
			}
		}
		
	}
	public function result()
	{
		$sQuery = '
		SELECT SQL_CALC_FOUND_ROWS `'.str_replace(' , ', ' ', implode('`, `', $this->aColumns)).'`   
		FROM '.$this->sTable.$this->where().$this->order().$this->limit();
		$rResult = $this->db->query($sQuery)->result_array();
		return $rResult;	
	}
	public function resultfiltertotal()
	{
		$sQuery = 'SELECT FOUND_ROWS()';
		$query=$this->db->query($sQuery);
		$aResultFilterTotal=$query->result_array();
		return $aResultFilterTotal[0];		
	}
	public function total()
	{
		$sQuery = 'SELECT COUNT(`'.$this->sIndexColumn.'`)
			FROM '.$this->sTable.$this->where();
		$g_query=$this->db->query($sQuery);
		$aResultTotal=$g_query->result_array();
		return $aResultTotal[0];
	}
	public function output()
	{
		print_r($this->getData);
		$output = array(
			"sEcho" => intval($this->getData['sEcho']),
			"iTotalRecords" => $this->total(),
			"iTotalDisplayRecords" => $this->resultfiltertotal(),
			"aaData" => array()
		);
		//print_r($this->result());
		foreach ($this->result() as $aRow)
		{
			$row = array();
			for ( $i=0 ; $i<count($this->aColumns) ; $i++ )
			{
				if ( $this->aColumns[$i] == "version" )
				{
					/* Special output formatting for 'version' column */
					$row[] =($aRow[$aColumns[$i]]=='0') ? '-' : $aRow[$this->aColumns[$i] ];
				}
				else if ( $this->aColumns[$i] != ' ' )
				{
					/* General output */
					$row[] = $aRow[ $this->aColumns[$i] ];
				}
			}
			$output['aaData'][] = $row;
		}
		return $output;
		
	}
	
	
}