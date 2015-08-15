<?php /* Smarty version 3.1.27, created on 2015-08-15 09:33:45
         compiled from "/home/arian/PhpstormProjects/agentpro/resources/views/apps/contacts/panel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144435984055cf0779bb46f8_18949692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53735ccc307222e9b96e0866f25f0398eb99d7a2' => 
    array (
      0 => '/home/arian/PhpstormProjects/agentpro/resources/views/apps/contacts/panel.tpl',
      1 => 1439630513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144435984055cf0779bb46f8_18949692',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55cf0779c26819_52959992',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55cf0779c26819_52959992')) {
function content_55cf0779c26819_52959992 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144435984055cf0779bb46f8_18949692';
?>
<header class="slidePanel-header overlay" style="background-image: url('photos/placeholder.png');')">
  <div class="overlay-panel overlay-background vertical-align">
    <div class="slidePanel-actions">
      <div class="btn-group">
        <button type="button" class="btn btn-pure btn-inverse icon wb-folder" aria-hidden="true"></button>
        <button type="button" class="btn btn-pure btn-inverse icon wb-trash" aria-hidden="true"></button>
        <button type="button" class="btn btn-pure btn-inverse slidePanel-close icon wb-close"
        aria-hidden="true"></button>
      </div>
    </div>
    <div class="vertical-align-middle">
      <a class="avatar" href="javascript:void(0)">
        <img src="portraits/2.jpg" alt="...">
      </a>
      <h3 class="name">Seevisual</h3>
      <div class="tags">
        <button type="button" class="btn btn-outline btn-inverse">Desginer</button>
        <button type="button" class="btn btn-outline btn-inverse">UI</button>
        <button type="button" class="btn btn-outline btn-inverse">Rocker</button>
      </div>
    </div>
    <button type="button" class="edit btn btn-success btn-floating" data-toggle="edit">
      <i class="icon wb-pencil animation-scale-up" aria-hidden="true"></i>
      <i class="icon wb-close animation-scale-up" aria-hidden="true"></i>
    </button>
  </div>
</header>
<div class="slidePanel-inner">
  <table class="user-info">
    <tbody>
      <tr>
        <td class="info-label">Email:</td>
        <td>
          <span>mazhesee@gmail.com</span>
          <div class="form-group form-material floating">
            <input type="email" class="form-control empty" name="inputFloatingEmail" value="mazhesee@gmail.com">
          </div>
        </td>
      </tr>
      <tr>
        <td class="info-label">Phone:</td>
        <td>
          <span>13581729789</span>
          <div class="form-group form-material floating">
            <input type="text" class="form-control empty" name="inputFloatingPhone" value="13581729789">
          </div>
        </td>
      </tr>
      <tr>
        <td class="info-label">Address:</td>
        <td>
          <span>Fuzhou</span>
          <div class="form-group form-material floating">
            <input type="text" class="form-control empty" name="inputFloatingAddress" value="Fuzhou">
          </div>
        </td>
      </tr>
      <tr>
        <td class="info-label">Birthday:</td>
        <td>
          <span>1990/2/15</span>
          <div class="form-group form-material floating">
            <input type="text" class="form-control empty" name="inputFloatingBirthday" value="1990/2/15">
          </div>
        </td>
      </tr>
      <tr>
        <td class="info-label">URL:</td>
        <td>
          <span>http://amazingSurge.com</span>
          <div class="form-group form-material floating">
            <input type="text" class="form-control empty" name="inputFloatingURL" value="http://amazingSurge.com">
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div><?php }
}
?>