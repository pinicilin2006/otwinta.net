<!DOCTYPE html>
<html>
  <head>
    <title>Формирование заявлений купли-продажи</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse" role="navigation"><!--Верхняя панель-->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          <a class="navbar-brand" href="/">Сервис формирования заявлений</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav nav-pills  navbar-nav navbar-right">
	        <li class="dropdown">
	        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Договора</a>
    				<ul class="dropdown-menu">    
			            <li>
			              <a href="index.php">
			                <b>Договор на двигатель с предоплатой</b>
			              </a>
			            </li>
			            <li class="active">
			              <a href="index2.php">
			                <b>Договор на двигатель с частичной предоплатой</b>
			              </a>
			            </li>
			            <li>
			              <a href="index3.php">
			                <b>Договор на детали с частичной предоплатой</b>
			              </a>
			            </li>
			        </ul>
			    </li>                         
          </ul>          
        </div>
      </div>
    </nav><!--Конец верхней панели-->
    <data class="col-sm-10 col-sm-offset-1">
    	<div class="panel panel-primary">
			<div class="panel-heading"><h3>Договор купли-продажи двигателя с предоплатой</h3></div>
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="create_docx/2.php">
					<fieldset>
					<!-- Form Name -->
						<!-- <legend>Договор купли-продажи двигателя</legend> -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="F_NUM">Номер договора</label>  
						  	<div class="col-md-5">
						  		<input id="F_NUM" name="F_NUM" type="text" placeholder="Номер договора" class="form-control input-md" required="">
						  	</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="F_DATE">Дата</label>  
						  	<div class="col-md-5">
						  		<input id="F_DATE" name="F_DATE" type="text" placeholder="Дата" class="form-control input-md" value="<?=date('d.m.Y')?>" required="">
						  	</div>
						</div>				
						<hr>
						<div class="form-group">
							<label class="col-md-4 control-label" for="F_FIO">ФИО</label>  
						  	<div class="col-md-5">
						  		<input id="F_FIO" name="F_FIO" type="text" placeholder="Фамилия Имя Отчество" class="form-control input-md" required="">
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_PAS_SER">Серия паспорта</label>  
						  	<div class="col-md-5">
						  		<input id="F_PAS_SER" name="F_PAS_SER" type="text" placeholder="Серия паспорта" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_PAS_NUM">Номер паспорта</label>  
						  	<div class="col-md-5">
						  		<input id="F_PAS_NUM" name="F_PAS_NUM" type="text" placeholder="Номер паспорта" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_PHONE">Номер телефона</label>  
						  	<div class="col-md-5">
						  		<input id="F_PHONE" name="F_PHONE" type="text" placeholder="Номер телефона" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_EMAIL">Email</label>  
						  	<div class="col-md-5">
						  		<input id="F_EMAIL" name="F_EMAIL" type="text" placeholder="email клиента" class="form-control input-md" required="">  
						  	</div>
						</div>				
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_CITY">Город поставки</label>  
						  	<div class="col-md-5">
						  		<input id="F_CITY" name="F_CITY" type="text" placeholder="Город поставки" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_AUTO_NAME">Марка, модель  ТС</label>  
						  	<div class="col-md-5">
						  		<input id="F_AUTO_NAME" name="F_AUTO_NAME" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_AUTO_YEAR">Год выпуска</label>  
						  	<div class="col-md-5">
						  		<input id="F_AUTO_YEAR" name="F_AUTO_YEAR" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_DVIG_NAME">Модель двигателя</label>  
						  	<div class="col-md-5">
						  		<input id="F_DVIG_NAME" name="F_DVIG_NAME" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_DVIG_TYPE">Тип двигателя</label>  
						  	<div class="col-md-5">
						  		<input id="F_DVIG_TYPE" name="F_DVIG_TYPE" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_AUTO_TYPE">Тип ТС</label>  
						  	<div class="col-md-5">
						  		<input id="F_AUTO_TYPE" name="F_AUTO_TYPE" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_V">Рабочий объем двигателя, л/см3 </label>  
						  	<div class="col-md-5">
						  		<input id="F_V" name="F_V" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_AUTO_STATE"> Техническое состояние </label>  
						  	<div class="col-md-5">
						  		<input id="F_AUTO_STATE" name="F_AUTO_STATE" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_PRICE">Цена</label>  
						  	<div class="col-md-5">
						  		<input id="F_PRICE" name="F_PRICE" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>						
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_PRICE_FULL">Цена прописью</label>  
						  	<div class="col-md-5">
						  		<input id="F_PRICE_FULL" name="F_PRICE_FULL" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>

						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_RAZMER_PREDOPLATI">Размер предоплаты в %</label>  
						  	<div class="col-md-5">
						  		<input id="F_RAZMER_PREDOPLATI" name="F_RAZMER_PREDOPLATI" type="text" placeholder="%" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_SUMMA_PREDOPLATI">Сумма предоплаты</label>  
						  	<div class="col-md-5">
						  		<input id="F_SUMMA_PREDOPLATI" name="F_SUMMA_PREDOPLATI" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_SUMMA_PREDOPLATI_FULL">Сумма предоплаты прописью</label>  
						  	<div class="col-md-5">
						  		<input id="F_SUMMA_PREDOPLATI_FULL" name="F_SUMMA_PREDOPLATI_FULL" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>

						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_POSTOPLATA">Окончательный расчёт в %</label>  
						  	<div class="col-md-5">
						  		<input id="F_POSTOPLATA" name="F_POSTOPLATA" type="text" placeholder="%" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_SUMMA_POSTOPLATI">Сумма окончательного расчёта</label>  
						  	<div class="col-md-5">
						  		<input id="F_SUMMA_POSTOPLATI" name="F_SUMMA_POSTOPLATI" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_SUMMA_POSTOPLATI_FULL">Сумма окончательного расчёта прописью</label>  
						  	<div class="col-md-5">
						  		<input id="F_SUMMA_POSTOPLATI_FULL" name="F_SUMMA_POSTOPLATI_FULL" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>						

						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_SROK">Срок передачи товара</label>  
						  	<div class="col-md-5">
						  		<input id="F_SROK" name="F_SROK" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="F_GARANTIA_SROK">Срок гарантии</label>  
						  	<div class="col-md-5">
						  		<input id="F_GARANTIA_SROK" name="F_GARANTIA_SROK" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
						  	<label class="col-md-4 control-label" for="SROKDOSTAVKI">Срок доставки</label>  
						  	<div class="col-md-5">
						  		<input id="SROKDOSTAVKI" name="SROKDOSTAVKI" type="text" placeholder="" class="form-control input-md" required="">  
						  	</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label" for="btn"></label>
							<div class="col-md-5">
								<button type="submit" id="btn" class="btn btn-success">Сформировать договор</button>
							</div>	
						</div>																											
					</fieldset>
				</form>
			</div>
		</div>


    </data>

                      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js?v=<?=mktime()?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js?v=<?=mktime()?>"></script>
    <script src="js/script.js?v=<?=mktime()?>"></script>
  </body>
</html>
<?php
?>