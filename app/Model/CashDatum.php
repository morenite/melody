<?php
class CashDatum extends AppModel{
	public $name = "CashDatum";
	public $primaryKey = "id_cash_data";

	public $belongsTo = array("User");
}