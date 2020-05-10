<?php

class Controller
{
    public $view;
    public $model;

    function __construct($pageURI = null)
    {
        // Create new objects for view and Model
        $this->view = new View();
        $this->model = new Model();

        // Determine what page you are on
        $this->$pageURI();
    }

    function home()
    {
        // Get data from the defined model method
        $data = $this->model->dbGetData('Model_3D');
        // Tell the viewer what view to view and which data to use
        $this->view->load('viewMain', $data);
    }

    function apiCreateTable()
    {
        $data = $this->model->dbCreateTable();
        $this->view->load('viewMessage', $data);
    }

    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->view->load('viewMessage', $data);
    }

    function apiGetData($table)
    {
        $data = $this->model->dbGetData($table);
        $this->view->load('view3DAppData', $data);
    }
}

?>