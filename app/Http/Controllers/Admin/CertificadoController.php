<?php

namespace Apemesp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Apemesp\Http\Controllers\Controller;

use Apemesp\Http\Requests;

use Apemesp\Apemesp\Repositories\Admin\AssociadoRepository;

use Session;

use View;


class CertificadoController extends Controller
{

    public function index()
    {

        return view('admin.associado.certificado.index');
    }



}
