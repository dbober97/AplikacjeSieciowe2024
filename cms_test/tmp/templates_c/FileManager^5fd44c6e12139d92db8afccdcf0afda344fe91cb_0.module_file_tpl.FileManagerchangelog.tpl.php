<?php
/* Smarty version 4.2.1, created on 2025-04-20 12:50:46
  from 'module_file_tpl:FileManager;changelog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6804d186aa3423_59476660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fd44c6e12139d92db8afccdcf0afda344fe91cb' => 
    array (
      0 => 'module_file_tpl:FileManager;changelog.tpl',
      1 => 1745009323,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6804d186aa3423_59476660 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>


    <li>
      <b>Version 1.4.0</b> <em>(silmarillion)</em>
      <br/>

    </li>

    <li>
    <b>Version 1.2.0</b> <em>(silmarillion)</em>
    <br/>
    New dirname starting with a . is now avoided
    <br/>
    Work towars 1.10 methods

  </li>

  <li>
    <b>Version 1.1.0</b> <em>(silmarillion)</em>
    <br/>
    Hid error on empty image files bug #4635
    <br/>
    Removed html from urls (bad bad, sil...)
    <br/>
    Now shows image info for files with uppercase extensions
    <br/>
    Now shows a proper error message if an uploaded file was too big, fixing bug #4046


  </li>


  <li>
  <b>Version 1.0.2</b> <em>(silmarillion)</em>
  <br/>
  Now check for illegal chars in filename when uploading files.
  </li>
  <li>
  <b>Version 1.0.1</b> <em>(silmarillion)</em>
  <br/>
  Released with CMSms 1.6.4
  <br/>
  Fixed file dates
  </li>
  <li>
  <b>Version 1.0</b> <em>(silmarillion)</em>
  <br/>
  Released with CMSms 1.6
  <br/>
  Closed a small security hole
  </li>
  <li><b>Version 0.4.5</b> <em>(silmarillion)</em></li>
  <li>Now won't accept / and \ and .. in newdir names</li>
  <li><b>Version 0.4.3</b> <em>(silmarillion)</em></li>
  <li>Fixed a syntax problem with the padlock-icon. Thanks tristan!</li>
  <li>Fixed a small problem rendering no filtype icons for othermodules using the API.</li>

  <li><b>Version 0.4.2</b> <em>(silmarillion)</em></li>
  <li>Fixed a cosmetic slash-bug regarding the multifile dropdown. Thanks RonnyK</li>

  <li><b>Version 0.4.1</b> <em>(silmarillion)</em></li>
  <li>Reworked the intrusion detection system.</li>
		  
		  <li><b>Version 0.4.0</b> <em>(silmarillion)</em></li>
		  <li>Implemented recursion of chmod</li>
		  <li>Added permission changes in Windows (only readonly attrib)</li>
		  <li>Implemented changing of sorting</li>
		  <li>Implemented quickmode for chmod functions (linux only)</li>
		  <li>Moved changelog to template</li>
      <li><b>Version 0.3.2</b> <em>(calguy1000)</em></li>
      <li>Is now an admin only module</li>
      <li>Completely remove the java postlet stuff</li>
		  <li>Added some security with javaapplet upload</li>
		  <li><b>Version 0.3.1</b></li>
		  <li>Added some security with javaapplet upload</li>
		  <li><b>Version 0.3.0</b></li>
		  <li>Released with CMSMS 1.3</li>
		  <li><b>Version 0.3.0b2</b></li>
		  <li>Fixed icon-size bug never showing 32px versions</li>
		  <li>Implemented chmod on dirs. No recursion yet, though</li>
		  <li>Fixed bug allowing all users to access advanced functions</li>
		  <li>Tuned layout of filemanager</li>
		  <li>Added thumbnailsupport</li>
		  <li><b>Version 0.3.0b1</b></li>
		  <li>Added renaming of dirs and files</li>
		  <li>Added chmod-functionality</li>
		  <li>Added copying/moving files within the uploads-dir</li>
		  <li>Improved the showing of file-sizes</li>
		  <li>Cosmetic fixes</li>
		  <li><b>Version 0.2.3</b></li>
		  <li>Fixed some reference problems regarding array_pop-function</li>
		  <li>General code cleanup</li>
		  <li><b>Version 0.2.2</b></li>
      <li>Changes hardcoded paths to admin and uploads to honor settings in config.php</li>
                        <li>A few cosmetic fixes</li>
		  
			<li><b>Version 0.2.1</b></li>
                        <li>Changed to use cms_move_uploaded_file.</li>
                        <li>Now Require CMS 1.2.1</li>

			<li><b>Version 0.2.0</b></li>
			<li>Everything touched and rewritten for inclusion in version 1.2 of CMSms</li>
			<li>Checked for noticed</li>
			<li>Postlet upload fixed and communication from it switched to session-vars</li>

		  <li><b>Version 0.1.4</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Fixed some usage of short tags</li>

		  <li><b>Version 0.1.3</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Added Java-applet multifile upload method</li>
		  <li>Implemented deletion of multiple files</li>
		  <li>Fixed select all checkbox</li>

		  <li><b>Version 0.1.2</b></li>
		  <li>Added recursive deletion of dirs</li>

		  <li><b>Version 0.1.1</b></li>
		  <li>Added support for multiple uploads, and support for unpacking tar.gz-files</li>
		  <li>Rewrote to use more of the module-api-functions</li>
		  <li><b>Version 0.1.0</b></li>
		  <li>First version which work properly and equals the builtin filemanager which is intends to render obsolete</li>
		</ul><?php }
}
