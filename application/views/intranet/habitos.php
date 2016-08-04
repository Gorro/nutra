        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-2 col-md-8">
                        <h1 class="text-center">Hábitos de alimentación</h1>
                        <hr>
                        <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="form">                       
                            <!--INICIO AGUA-->
                            <div class="form-group">
                                <label class="col-md-4">Agua</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($agua, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($agua, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($agua, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($agua, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($agua, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($agua, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($agua, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($agua, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($agua, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($agua, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($agua, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN AGUA-->
                            <!--INICIO LIQUIDOS-->
                            <div class="form-group">
                                <label class="col-md-4">Liquidos <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Incluye jugos envasados, sopas y caldos, aguas de hierbas, infusiones, gaseosas, bebidas hidrantantes.">?</button></label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($liquidos, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($liquidos, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($liquidos, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($liquidos, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($liquidos, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($liquidos, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($liquidos, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($liquidos, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($liquidos, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($liquidos, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($liquidos, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN LIQUIDOS-->
                            <!--INICIO CEREALES-->
                            <div class="form-group">
                                <label class="col-md-4">Cereales <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Pan, papas, arroz, fideos, choclo, arvejas, habas, mote, quinoa, semola.">?</button></label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($cereales, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($cereales, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($cereales, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($cereales, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($cereales, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($cereales, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($cereales, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($cereales, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($cereales, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($cereales, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($cereales, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN CERALES-->
                            <!--INICIO FRUTAS-->
                            <div class="form-group">
                                <label class="col-md-4">Frutas</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($frutas, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($frutas, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($frutas, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($frutas, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($frutas, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($frutas, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($frutas, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($frutas, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($frutas, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($frutas, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($frutas, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN FRUTAS-->
                            <!--INICIO VERDURAS-->
                            <div class="form-group">
                                <label class="col-md-4">Verduras</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($verduras, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($verduras, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($verduras, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($verduras, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($verduras, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($verduras, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($verduras, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($verduras, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($verduras, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($verduras, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($verduras, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN VERDURAS-->
                            <!--INICIO LACTEOS-->
                            <div class="form-group">
                                <label class="col-md-4">Lacteos y derivados <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Leche entera, descremada o semidescremada, queso, quesillo, yogurt, leche cultivada.">?</button></label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($lacteosyderivados, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($lacteosyderivados, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($lacteosyderivados, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($lacteosyderivados, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($lacteosyderivados, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($lacteosyderivados, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($lacteosyderivados, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($lacteosyderivados, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($lacteosyderivados, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($lacteosyderivados, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($lacteosyderivados, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN LACTEOS-->
                            <!--INICIO EMBUTIDOS 1313-->
                            <div class="form-group">
                                <label class="col-md-4">Embutidos y comida rapida </label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($embutidosycomidarapida, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($embutidosycomidarapida, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($embutidosycomidarapida, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($embutidosycomidarapida, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($embutidosycomidarapida, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($embutidosycomidarapida, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($embutidosycomidarapida, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($embutidosycomidarapida, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($embutidosycomidarapida, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($embutidosycomidarapida, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($embutidosycomidarapida, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN EMBUTIDOS 1313-->
                            <!--INICIO CARNES-->
                            <div class="form-group">
                                <label class="col-md-4">Carnes, aves y pescados </label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($carnesavespescados, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($carnesavespescados, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($carnesavespescados, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($carnesavespescados, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($carnesavespescados, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($carnesavespescados, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($carnesavespescados, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($carnesavespescados, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($carnesavespescados, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($carnesavespescados, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($carnesavespescados, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN CARNES-->
                            <!--INICIO LEGUMBRES-->
                            <div class="form-group">
                                <label class="col-md-4">Legumbres</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($legumbres, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($legumbres, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($legumbres, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($legumbres, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($legumbres, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($legumbres, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($legumbres, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($legumbres, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($legumbres, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($legumbres, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($legumbres, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN LEGUMBRES-->
                            <!--INICIO ACEITE-->
                            <div class="form-group">
                                <label class="col-md-4">Aceites</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($aceites, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($aceites, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($aceites, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($aceites, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($aceites, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($aceites, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($aceites, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($aceites, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($aceites, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($aceites, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($aceites, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN ACEITE-->
                            <!--INICIO GRASOS-->
                            <div class="form-group">
                                <label class="col-md-4">Alimentos grasos <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Frutos secos y palta.">?</button></label>
                                <div class="col-md-8 selector"> 
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($alimentosgrasos, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($alimentosgrasos, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($alimentosgrasos, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($alimentosgrasos, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($alimentosgrasos, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($alimentosgrasos, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($alimentosgrasos, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($alimentosgrasos, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($alimentosgrasos, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($alimentosgrasos, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($alimentosgrasos, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN GRASOS-->
                            <!--INICIO HUEVO-->
                            <div class="form-group">
                                <label class="col-md-4">Huevos</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($huevos, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($huevos, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($huevos, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($huevos, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($huevos, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($huevos, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($huevos, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($huevos, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($huevos, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($huevos, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($huevos, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN HUEVO-->
                            <!--INICIO AZUCAR-->
                            <div class="form-group">
                                <label class="col-md-4">Azucar y pasteleria</label>
                                <div class="col-md-8 selector">
                                    <select name="frecuencia[]" required>
                                        <option value="Nunca" <?php if($no_datos and strcmp($azucarespasteleria, 'Nunca')==0) echo 'selected'; ?>>Nunca</option>
                                        <option value="Mensual" <?php if($no_datos and strcmp($azucarespasteleria, 'Mensual')==0) echo 'selected'; ?>>Mensual</option>
                                        <option value="2 veces por mes" <?php if($no_datos and strcmp($azucarespasteleria, '2 veces por mes')==0) echo 'selected'; ?>>2 veces por mes</option>
                                        <option value="3 veces por mes" <?php if($no_datos and strcmp($azucarespasteleria, '3 veces por mes')==0) echo 'selected'; ?>>3 veces por mes</option>
                                        <option value="Semanalmente" <?php if($no_datos and strcmp($azucarespasteleria, 'Semanalmente')==0) echo 'selected'; ?>>Semanalmente</option>
                                        <option value="2 veces por semana" <?php if($no_datos and strcmp($azucarespasteleria, '2 veces por semana')==0) echo 'selected'; ?>>2 veces por semana</option>
                                        <option value="3 veces por semana" <?php if($no_datos and strcmp($azucarespasteleria, '3 veces por semana')==0) echo 'selected'; ?>>3 veces por semana</option>
                                        <option value="4 veces por semana" <?php if($no_datos and strcmp($azucarespasteleria, '4 veces por semana')==0) echo 'selected'; ?>>4 veces por semana</option>
                                        <option value="5 veces por semana" <?php if($no_datos and strcmp($azucarespasteleria, '5 veces por semana')==0) echo 'selected'; ?>>5 veces por semana</option>
                                        <option value="6 veces por semana" <?php if($no_datos and strcmp($azucarespasteleria, '6 veces por semana')==0) echo 'selected'; ?>>6 veces por semana</option>
                                        <option value="Diariamente"<?php if($no_datos and strcmp($azucarespasteleria, 'Diariamente')==0) echo 'selected'; ?>>Diariamente</option>
                                    </select>
                                </div>
                            </div>
                            <!--FIN AZUCAR-->
                            <input class="btn btn-success pull-left" type="submit" value="Guardar" />
                        </form>     
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <script>
            $( document ).ready(function() {
                $('.tool').tooltip();                
                var i;
                for(i=0;i<10;i++)
                    $(".menu_nutra li").eq(i).removeClass('active');
                $(".menu_nutra li").eq(4).addClass('active');  

                var formulario = $('#form');
                formulario.on('submit',function(e){
                    var guardando;
                    guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                    $('.col-md-offset-2').html(guardando);
                    e.preventDefault();
                    $.post(
                        "<?= base_url('intranet/insertar_habitos'); ?>",
                        formulario.serialize(),
                        function(respuesta){
                            location.reload();
                    });
                });            
            });
        </script>

        

    
