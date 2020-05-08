<?php

class Controller
{
    public $load;
    public $model;

    function __construct($pageURI = null)
    {
        // Create new objects for Load and Model
        $this->load = new Load();
        $this->model = new Model();

        // Determine what page you are on
        $this->$pageURI();
    }

    function home()
    {
        // Get data from the defined model method
        $data = $this->model->model3D_info();
        // Tell the loader what view to load and which data to use
        $this->load->view('view3DAppTest2', $data);
    }

    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    function apiGetData()
    {
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }
}

?>