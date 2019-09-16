<?php

class Home extends CI_Controller{
	public function index()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/home");
		$this->load->view("landing/footer");
	}

	public function program()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/program");
		$this->load->view("landing/footer");
	}

	public function kabar()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/kabar");
		$this->load->view("landing/footer");
	}


	public function khazanah()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/khazanah");
		$this->load->view("landing/footer");
	}

	public function pfi()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/pfi");
		$this->load->view("landing/footer");
	}

	public function registrasi()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/registrasi");
		$this->load->view("landing/footer");
	}

	public function login()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/login");
		$this->load->view("landing/footer");
	}

	public function sejarah()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/sejarah");
		$this->load->view("landing/footer");
	}

	public function visimisi()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/visimisi");
		$this->load->view("landing/footer");
	}

	public function siapakami()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/siapakami");
		$this->load->view("landing/footer");
	}

	public function keanggotaan()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/keanggotaan");
		$this->load->view("landing/footer");
	}

	public function tujuan()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/tujuan");
		$this->load->view("landing/footer");
	}

	public function acara()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/acara");
		$this->load->view("landing/footer");
	}

	public function berita()
	{
		$this->load->view("landing/header");
		$this->load->view("landing/berita");
		$this->load->view("landing/footer");
	}
}
