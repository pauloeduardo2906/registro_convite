<style>

    *{
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    }

    body{
        background: #FFF;
        padding: 10px 30px 10px 30px;
    }

	.fundo{
		background-color: #F1F4F4;
	}

    table{
        border-collapse: collapse;
        width: 100%;
    }

    td, th{
        padding: 15px 30px;
    }

    th{
        color: #FFF;
        background-color: #212529;
    }

    td{
        text-align: center;
        border-bottom: 1px solid #DEE2E6;
    }


	tr:nth-child(even){
        background-color: #E9ECEF;
    }

    tr:hover{
        background-color: #FFEEBA; 
    }



    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.2rem 0.75rem;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: all 0.3s;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }

    .btn:hover{
        filter: brightness(0.8);
    }

    .btn:active{
        filter: brightness(0.6);
    }

    .btn-primary{
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-secondary{
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-success{
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-danger{
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-warning{
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-info{
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .alert{
        width: 30%;
        margin: auto;
        text-align: center;
        padding: 15px;
        border-radius: 10px;
        border: 2px solid;
        box-sizing: border-box;
    }

    .alert-primary{
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff;
    }

    .alert-secondary{
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db;
    }

    .alert-success{
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-danger{
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .alert-warning{
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    .alert-info{
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }

    .alert-light{
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe;
    }

    .alert-dark{
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca;
    }

    .quadro{
        border: 5px double #CE9965;
        border-radius: 8px;
        padding: 2rem;
        background-color: #203E78;
        box-shadow: 1px 1px 4px #333;
    }



	.form{
		width: 20%;
		padding: 20px;
		box-sizing: border-box;
		margin: 20px auto 0px auto;
		background-color: #FDFDFD;
		border: 2px solid #ebeef0;
		border-radius: 5px;
	}

    .form-m{
		width: 50%;
		padding: 20px;
		box-sizing: border-box;
		margin: 20px auto 0px auto;
		background-color: #FDFDFD;
		border: 2px solid #ebeef0;
		border-radius: 5px;
	}

    .form-g{
		width: 80%;
		padding: 20px;
		box-sizing: border-box;
		margin: 20px auto 0px auto;
		background-color: #FDFDFD;
		border: 2px solid #ebeef0;
		border-radius: 5px;
	}



	.input{
		display: flex;
		flex-direction: column;
	}

	.form-control {
        display: block;
        height: calc(2.25rem + 2px);
        padding: 0.2rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        margin-bottom: 10px;
	}

	label{
		margin-bottom: 5px;
	}


    .file{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-left: 10px;
        font-size: 18px;
        font-family: Arial;
        margin: 10px 0px;
        border: 2px solid #000;
        border-radius: 5px;
        color: #000;
        padding: 0.8rem 0.75rem;
        background-color: #bee5eb;
    }

    .file-primary{
        position: absolute;
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        margin-top: 5px;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        padding: 0.3rem 0.70rem;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 0.8rem;
        border-radius: 0.25rem;
        transition: all 0.3s;
        color: #fff;
        background-color: #007bff;
        cursor: pointer;
        text-decoration: none;
    }

    .file label:hover{
        filter: brightness(0.9);
    }

    .file label:active{
        filter: brightness(0.7);
    }




</style>