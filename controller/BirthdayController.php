<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("birthday/create");
}

function birthdayInsert()
{
	createBirthday();
	header("Location". URL. "birthday/index");

}

function Save()
{
	if (createBirthday()) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function delete($id)
{
	deleteBirthday();
	if (deleteBirthday($id)) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/errordb");
		exit();	
	}
}

function edit($id)
{
	$birthday = getBirthday($id);
	render("birthday/edit", array(
		"birthday" => $birthday
	));
}

function editSave($id)
{
	if (editBirthday($id)) {
		header("location:" . URL . "birthday/index");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

