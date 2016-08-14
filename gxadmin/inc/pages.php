<?php
/**
 * GeniXCMS - Content Management System.
 *
 * PHP Based Content Management System and Framework
 *
 * @since 0.0.1 build date 20150202
 *
 * @version 1.0.0
 *
 * @link https://github.com/semplon/GeniXCMS
 * @link http://genixcms.org
 *
 * @author Puguh Wijayanto <psw@metalgenix.com>
 * @copyright 2014-2016 Puguh Wijayanto
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
?>
<div class="row">
    <div class="col-md-12">
        <?=Hooks::run('admin_page_notif_action', $data);?>
    </div>
    <div class="col-md-12">
        <h2><i class="fa fa-file-o"></i> <?=PAGES;?>
            <a href="index.php?page=pages&act=add&token=<?=TOKEN;?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> <span class="hidden-xs hidden-sm"><?=ADD_NEW_PAGE;?></span>
            </a>
        </h2>
        <hr />
    </div>
    <div class="col-sm-12">
        <form action="index.php?page=pages" method="get">
            <input type="hidden" name="page" value="pages">
            <div class="row">
                <div class="col-sm-12">
                    <h5><?=FIND_PAGES;?></h5>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="q" class="form-control" placeholder="<?=SEARCH_PAGES;?> ">
                    </div>

                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <div class='input-group date' id='dateFrom'>
                            <input type='text' class="form-control" name="from" placeholder="From" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <div class='input-group date' id='dateTo'>
                            <input type='text' class="form-control" name="to" placeholder="To" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="1"><?=PUBLISHED;?></option>
                            <option value="0"><?=UNPUBLISHED;?></option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span> <?=FIND_PAGES;?>
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="token" value="<?=TOKEN;?>">
        </form>
    </div>
    <div class="col-md-12">
        <form action="" method="post">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><?=ID;?></th>
                            <th><?=TITLE;?></th>
                            <th><?=DATE;?></th>
                            <th><?=STATUS;?></th>
                            <th><?=AUTHOR;?></th>
                            <th><?=ACTION;?></th>
                            <th><?=ALL;?> <input type="checkbox" id="selectall"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // print_r($data);
                        if ($data['num'] > 0) {
                            foreach ($data['posts'] as $p) {
                                # code...
                                //echo $p->id;
                                if ($p->status == '0') {
                                    $status = UNPUBLISHED;
                                } else {
                                    $status = PUBLISHED;
                                }
                                echo "
                                <tr>
                                    <td>{$p->id}</td>
                                    <td><a href=\"".Url::page($p->id)."\" target=\"_new\">{$p->title}</a></td>
                                    <td>".Date::format($p->date)."</td>
                                    <td>{$status}</td>
                                    <td>{$p->author}</td>
                                    <td>
                                        <a href=\"index.php?page=pages&act=edit&id={$p->id}&token=".TOKEN.'" class="label label-success">'.EDIT."</a>
                                        <a href=\"index.php?page=pages&act=del&id={$p->id}&token=".TOKEN."\" class=\"label label-danger\"
                                        onclick=\"return confirm('Are you sure you want to delete this item?');\">".DELETE."</a>
                                    </td>
                                        <td>
                                        <input type=\"checkbox\" name=\"post_id[]\" value=\"{$p->id}\" id=\"select\">
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo '
                                <tr>
                                    <td>
                                        '.NO_PAGE_FOUND.'
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <th><?=ID;?></th>
                        <th><?=TITLE;?></th>
                        <th><?=DATE;?></th>
                        <th><?=STATUS;?></th>
                        <th><?=AUTHOR;?></th>
                        <th >
                        <select name="action" class="form-control">
                            <option value="publish"><?=PUBLISH;?></option>
                            <option value="unpublish"><?=UNPUBLISH;?></option>
                            <option value="delete"><?=DELETE;?></option>
                        </select>
                        <input type="hidden" name="token" value="<?=TOKEN;?>">
                        </th>
                        <th>
                            <button type="submit" name="doaction" class="btn btn-danger">
                                 <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </th>
                    </tfoot>
                </table>
            </div>
        </form>

    </div>
</div>
