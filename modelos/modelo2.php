<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modelo2.css">
</head>
    
<body>
	<div class="resume">
	   <div class="resume_left">
	     <div class="resume_profile">
	       <img src="<?= $dados['foto'];?>" alt="profile_pic">
	     </div>
	     <div class="resume_content">
	       <div class="resume_item resume_info">
	         <div class="title">
	           <p class="bold"><?= $dados['nome']; ?></p>
	           <p class="regular"><?= $dados['cargo']; ?></p>
	         </div>
	         <ul class="ul">
	           <li>
	             <div class="icon">
	               <i class="fas fa-map-signs"></i>
	             </div>
	             <div class="data"><?= $dados['endereco']; ?></div>
	           </li>
	           <li>
	             <div class="icon">
	               <i class="fas fa-mobile-alt"></i>
	             </div>
	             <div class="data"><?= $dados['telefone']; ?></div>
	           </li>
	           <li>
	             <div class="icon">
	               <i class="fas fa-envelope"></i>
	             </div>
	             <div class="data"><?= $dados['email']; ?></div>
	           </li>
						 <!--
	           <li>
	             <div class="icon">
	               <i class="fab fa-weebly"></i>
	             </div>
	             <div class="data"><?= $dados['site']; ?></div>
					 </li> -->
	         </ul>
	       </div>
	       <div class="resume_item resume_social">
	         <div class="title">
	           <p class="bold">Social</p>
	         </div>
	         <ul>
	           <li>
	             <div class="icon">
	               <i class="fab fa-facebook-square"></i>
	             </div>
	             <div class="data">
	               <p class="semi-bold">Facebook</p>
	               <p>@facebook</p>
	             </div>
	           </li>
	           <li>
	             <div class="icon">
	               <i class="fab fa-twitter-square"></i>
	             </div>
	             <div class="data">
	               <p class="semi-bold">Twitter</p>
	               <p>@twitter</p>
	             </div>
	           </li>
	           <li>
	             <div class="icon">
	               <i class="fab fa-youtube"></i>
	             </div>
	             <div class="data">
	               <p class="semi-bold">Youtube</p>
	               <p>@youtube</p>
	             </div>
	           </li>
	           <li>
	             <div class="icon">
	               <i class="fab fa-linkedin"></i>
	             </div>
	             <div class="data">
	               <p class="semi-bold">Linkedin</p>
	               <p>@linkedin</p>
	             </div>
	           </li>
	         </ul>
	       </div>
	     </div>
	  </div>
	  <div class="resume_right">
	    <div class="resume_item resume_about">
	        <div class="title">
	           <p class="bold">Resumo</p>
	         </div>
	        <p><?= $dados['resumo']; ?></p>
	    </div>
	    <div class="resume_item resume_work">
	        <div class="title">
            <?php if($dados['experiencias']){
    ?>						
	           <p class="bold">Experiência Profissional</p>
	         </div>
	        <ul>
					<?php for($i = 0; $i < sizeof ($dados['experiencias']['cargos']); $i++){ ?>					 
	            <li>
	                <div class="date"><?= $dados['experiencias']['inicios'][$i] ?><em>-</em><?= $dados['experiencias']['fins'][$i] ?></div> 
	                <div class="info">
	                     <p class="semi-bold"><?= $dados['experiencias']['empresas'][$i] ?></p> 
	                  <p><?= $dados['experiencias']['cargos'][$i] ?></p>
	                </div>
	            </li>
			<?php }?>
	        </ul>
			<?php }?>	
	    </div>
	    <div class="resume_item resume_education">
	      <div class="title">
					<?php if($dados['formacoes']){ ?>
	           <p class="bold">Educação</p>
	         </div>
	      <ul>
					 <?php for($i = 0; $i < sizeof ($dados['formacoes']['cursos']); $i++){
        ?>
	            <li>
	                <div class="date"><?= $dados['formacoes']['inicios'][$i] ?> <?= $dados['formacoes']['conclusoes'][$i] ?></div> 
	                <div class="info">
	                     <p class="semi-bold"><?= $dados['formacoes']['instituicoes'][$i] ?></p> 
	                  <p><?= $dados['formacoes']['cursos'][$i] ?></p>
	                </div>
	            </li>
					<?php } ?>
	        </ul>
					<?php }?>	
	    </div>
	  </div>
	</div>
    <script>
        window.print();
    </script>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>