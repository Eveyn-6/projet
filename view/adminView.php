<?php ob_start(); ?> 

<ul id="nav" class="nav justify-content-center">
<li class="nav-item">
          <a class="nav-link" href="index.php?action="><div id="navbar">Gestion d'utilisateurs</div></a>
        </li> 
         <li class="nav-item">
          <a class="nav-link" href="index.php?action="><div id="navbar">Gestion d'albums</div></a>
        </li> <li class="nav-item">
          <a class="nav-link" href="index.php?action="><div id="navbar">Gestion des photos</div></a>
        </li> 
        </ul>
 <?php
 require_once("view/templates.php");