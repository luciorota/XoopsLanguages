<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Installer path configuration page
 *
 * See the enclosed file license.txt for licensing information.
 * If you did not receive this file, get it at http://www.fsf.org/copyleft/gpl.html
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     upgrader
 * @since       2.3.0
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @version     $Id: settings_path.php 2087 2008-09-15 04:50:23Z phppp $
 */

if ( !defined( 'XOOPS_ROOT_PATH' ) ) {
    die( 'Bad installation: please add this folder to the XOOPS install you want to upgrade');
}

function genPathCheckHtml( $path, $valid ) {
    if ( $valid ) {
        switch ($path) {
        case 'lib':
        case 'data':
        default:
            $msg = XOOPS_PATH_FOUND;
            break;
        }
        return '<img src="img/yes.png" alt="Success" />' . htmlspecialchars( $msg );
    }  else {
        switch ($path) {
        case 'lib':
        case 'data':
        default:
            $msg = ERR_COULD_NOT_ACCESS;
            break;
        }
        return '<img src="img/no.png" alt="Error" /><br />' . htmlspecialchars( $msg );
    }
}


$vars =& $_SESSION['settings'];
$ctrl = new PathStuffController();
if ( $res = $ctrl->execute() ) {
    return $res;
}

?>

<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>

<fieldset>

    <legend><?php echo LEGEND_XOOPS_MAINFILE_FORPROTECTOR; ?></legend>
    <label><?php echo XOOPS_MAINFILE_LABEL_FORPROTECTOR; ?></label>
    
    
    <legend><?php echo LEGEND_XOOPS_PATHS; ?></legend>
    
    <label for="data"><?php echo XOOPS_DATA_PATH_LABEL; ?></label>
    <div class="xoform-help"><?php echo htmlspecialchars(XOOPS_DATA_PATH_HELP); ?></div>
    <input type="text" name="data" id="data" value="<?php echo $ctrl->xoopsPath['data']; ?>" />
    <span id="datapathimg"><?php echo genPathCheckHtml('data', $ctrl->validPath['data'] ); ?></span>
    <?php if ( $ctrl->validPath['data'] && !empty( $ctrl->permErrors['data'] ) ) { ?>
    <div id="dataperms" class="x2-note">
    <?php echo CHECKING_PERMISSIONS . '<br /><p>' . ERR_NEED_WRITE_ACCESS . '</p>'; ?>
    <ul class="diags">
    <?php foreach ( $ctrl->permErrors['data'] as $path => $result ) {
        if ( $result ) {
            echo '<li class="success">' . sprintf( IS_WRITABLE, $path ) . '</li>';
        } else {
            echo '<li class="failure">' . sprintf( IS_NOT_WRITABLE, $path ) . '</li>';
        }
    } ?>
    </ul>
    <?php } else { ?>
    <div id="dataperms" class="x2-note" style="display: none;" />
    <?php } ?>
    </div>

    <label for="lib"><?php echo XOOPS_LIB_PATH_LABEL; ?></label>
    <div class="xoform-help"><?php echo htmlspecialchars(XOOPS_LIB_PATH_HELP); ?></div>
    <input type="text" name="lib" id="lib" value="<?php echo $ctrl->xoopsPath['lib']; ?>" />
    <span id="libpathimg"><?php echo genPathCheckHtml( 'lib', $ctrl->validPath['lib'] ); ?></span>

</fieldset>
<input type="hidden" name="action" value="next" />
<input type="hidden" name="task" value="path" />
    
<div class="xo-formbuttons">
    <button type="submit"><?php echo _SUBMIT; ?></button>
</div>
