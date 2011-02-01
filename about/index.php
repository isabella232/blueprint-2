<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *               Mike Keith
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "About Gemini Blueprint";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, History, origin, origins, about";
	$pageAuthor		= "Costin Leau";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>About Gemini Blueprint</h2>
		<p>
		    Eclipse Gemini Blueprint project makes it easy to build Java applications that run in an OSGi framework. By using Gemini Blueprint, applications benefit from using a better separation 
		    of modules, the ability to dynamically add, remove, and update modules in a running system, the ability to deploy multiple versions of a module simultaneously 
		    (and have clients automatically bind to the appropriate one), and a dynamic service model.<br/>
			Eclipse Gemini Blueprint is the reference implementation for the <a href="http://www.osgi.org">OSGi Alliance</a> Blueprint Service (chapter 121 of the OSGi 4.2 Compendium Specification). 
		</p>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>