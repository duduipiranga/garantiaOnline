<!-- sidebar 
            <a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>-->
<div class="sidebar">
                <div class="antiScroll">
                    <div class="antiscroll-inner">
                        <div class="antiscroll-content">
                    
                            <div class="sidebar_inner">
  
                                <div id="side_accordion" class="accordion">
                                    <?php
									if($_SESSION['logado'] != 0) { 
									?>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                                <i class="icon-folder-close"></i> Garantias
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseOne">
                                            <div class="accordion-inner">
                                                <ul class="nav nav-list">
                                                    <li><a href="javascript:void(0)">Cadastrar</a></li>
                                                    <li><a href="javascript:void(0)">Pendentes</a></li>
                                                    <li><a href="javascript:void(0)">Concluidas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                                <i class="icon-user"></i> Usuario
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseTwo">
                                            <div class="accordion-inner">
                                                <ul class="nav nav-list">
                                                    <li><a href="javascript:void(0)">Meus Dados</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    


                                </div>
                                
                                <div class="push"></div>
                            </div>
                               
                            <div class="sidebar_info">
                                <ul class="unstyled">
                                    <li>
                                        <span class="act act-warning"><?php echo $_SESSION['id']; ?></span>
                                        <strong>ID</strong>
                                    </li>
                                    <li>
                                        <span class="act act-danger" id="TotalSgPendente"><?php echo getTotalSgPendente(); ?></span>
                                        <strong>SG Pendentes</strong>
                                    </li>
                                    <li>
                                        <span class="act act-success" id="TotalSgConcluido"><?php echo getTotalSgConcluido(); ?></span>
                                        <strong>SG Concluídos</strong>
                                    </li>
                                </ul>
                            </div> 
                        <?php } ?>
                        </div>
                    </div>
                </div>
            
            </div>