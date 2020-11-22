<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->widget_info->markup_type=="list"){ ?>
    <?php $__Context->have_first_thumbnail=false ?>
    <?php if(count($__Context->widget_info->content_items) && $__Context->widget_info->content_items[0]->haveFirstThumbnail()){ ?>
        <?php $__Context->thumbnail_idx = $__Context->widget_info->content_items[0]->getFirstThumbnailIdx()  ?>
        <?php $__Context->have_first_thumbnail=true ?>
        <p class="widgetThumb floatLeft" style="margin-right:-<?php echo $__Context->widget_info->thumbnail_width ?>px">
            <a href="<?php echo $__Context->widget_info->content_items[$__Context->thumbnail_idx]->getLink() ?>" class="thumb"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="<?php echo $__Context->widget_info->content_items[$__Context->thumbnail_idx]->getThumbnail() ?>" style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;height:<?php echo $__Context->widget_info->thumbnail_height ?>px"></a>
        </p>
    <?php } ?>
    <div<?php if($__Context->have_first_thumbnail){ ?> style="padding-left:<?php echo $__Context->widget_info->thumbnail_width+10 ?>px"<?php } ?>>
        <ul class="widgetA">
    <?php $__Context->_idx=0 ?>
    <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
            <li<?php if($__Context->_idx >= $__Context->widget_info->list_count){ ?> style="display:none"<?php } ?>>
                <?php if($__Context->widget_info->option_view_arr&&count($__Context->widget_info->option_view_arr))foreach($__Context->widget_info->option_view_arr as $__Context->k => $__Context->v){ ?>
                <?php if($__Context->v=='title'){ ?>
                    <?php if($__Context->widget_info->show_browser_title=='Y' && $__Context->item->getBrowserTitle()){ ?>
                        <a href="<?php echo getSiteUrl($__Context->item->domain, '', 'mid', $__Context->item->get('mid')) ?>" class="board"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong><?php echo $__Context->item->getBrowserTitle() ?></strong></a>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_category=='Y' && $__Context->item->getCategory()){ ?>
                        <a href="<?php echo getSiteUrl($__Context->item->domain,'','mid',$__Context->item->get('mid'),'category',$__Context->item->get('category_srl')) ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong class="category"><?php echo $__Context->item->getCategory() ?></strong></a>
                    <?php } ?>
                    <a href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
                    <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
                        <em class="replyNum" title="Replies"><a href="<?php echo $__Context->item->getLink() ?>#comment"><?php echo $__Context->item->getCommentCount() ?></a></em>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_trackback_count=='Y' && $__Context->item->getTrackbackCount()){ ?>
                        <em class="trackbackNum" title="Trackbacks"><a href="<?php echo $__Context->item->getLink() ?>#trackback"><?php echo $__Context->item->getTrackbackCount() ?></a></em>
                    <?php } ?>
                    <?php if($__Context->widget_info->show_icon=='Y'){ ?>
                        <span class="icon"><?php echo $__Context->item->printExtraImages() ?></span>
                    <?php } ?>
                <?php }else if($__Context->v=='nickname'){ ?>
                    <a href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a>
                <?php }else if($__Context->v=='regdate'){ ?>
                    <span class="date"><?php echo $__Context->item->getRegdate("Y-m-d") ?></span> <span class="hour"><?php echo $__Context->item->getRegdate("H:i") ?></span>
                <?php } ?>
                <?php } ?>
            </li>
    <?php $__Context->_idx++ ?>
    <?php } ?>
        </ul>
    </div>
    <?php if($__Context->widget_info->page_count > 1 && $__Context->widget_info->list_count<$__Context->_idx){ ?>
        <ul class="widgetNavigator">
            <li><button type="button" class="prev" title="<?php echo $__Context->lang->cmd_prev ?>" onclick="content_widget_prev(jQuery(this).parents('ul.widgetNavigator').prev('div').children('table.widgetTableA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_prev ?></span></button></li>
            <li><button type="button" class="next" title="<?php echo $__Context->lang->cmd_next ?>" onclick="content_widget_next(jQuery(this).parents('ul.widgetNavigator').prev('div').children('table.widgetTableA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_next ?></span></button></li>
        </ul>
    <?php } ?>
<?php }else{ ?>
    <?php $__Context->have_first_thumbnail=false ?>
    <?php if(count($__Context->widget_info->content_items) && $__Context->widget_info->content_items[0]->haveFirstThumbnail()){ ?>
        <?php $__Context->thumbnail_idx = $__Context->widget_info->content_items[0]->getFirstThumbnailIdx()  ?>
        <?php $__Context->have_first_thumbnail=true ?>
        <p class="widgetThumb floatLeft" style="margin-right:-<?php echo $__Context->widget_info->thumbnail_width ?>px">
            <a href="<?php echo $__Context->widget_info->content_items[$__Context->thumbnail_idx]->getLink() ?>" class="thumb"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><img src="<?php echo $__Context->widget_info->content_items[$__Context->thumbnail_idx]->getThumbnail() ?>" style="width:<?php echo $__Context->widget_info->thumbnail_width ?>px;height:<?php echo $__Context->widget_info->thumbnail_height ?>px"></a>
        </p>
    <?php } ?>
    <div<?php if($__Context->have_first_thumbnail){ ?> style="padding-left:<?php echo $__Context->widget_info->thumbnail_width+10 ?>px"<?php } ?>>
        <table class="widgetTableA" border="1" cellspacing="0">
            <tbody>
    <?php $__Context->_idx=0 ?>
    <?php if($__Context->widget_info->content_items&&count($__Context->widget_info->content_items))foreach($__Context->widget_info->content_items as $__Context->key => $__Context->item){ ?>
            <tr<?php if($__Context->_idx >= $__Context->widget_info->list_count){ ?> style="display:none"<?php } ?>>
    <?php if($__Context->widget_info->option_view_arr&&count($__Context->widget_info->option_view_arr))foreach($__Context->widget_info->option_view_arr as $__Context->k => $__Context->v){ ?>
        <?php if($__Context->v=='title'){ ?>
            <td class="title">
                <?php if($__Context->widget_info->show_browser_title=='Y' && $__Context->item->getBrowserTitle()){ ?>
                    <a href="<?php echo getSiteUrl($__Context->item->domain, '', 'mid', $__Context->item->get('mid')) ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong class="board"><?php echo $__Context->item->getBrowserTitle() ?></strong></a>
                <?php } ?>
                <?php if($__Context->widget_info->show_category=='Y' && $__Context->item->getCategory()){ ?>
                    <a href="<?php echo getSiteUrl($__Context->item->domain,'','mid',$__Context->item->get('mid'),'category',$__Context->item->get('category_srl')) ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><strong class="category"><?php echo $__Context->item->getCategory() ?></strong></a>
                <?php } ?>
                <a href="<?php echo $__Context->item->getLink() ?>"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTitle($__Context->widget_info->subject_cut_size) ?></a>
                <?php if($__Context->widget_info->show_comment_count=='Y' && $__Context->item->getCommentCount()){ ?>
                    <em class="replyNum" title="Replies"><a href="<?php echo $__Context->item->getLink() ?>#comment"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getCommentCount() ?></a></em>
                <?php } ?>
                <?php if($__Context->widget_info->show_trackback_count=='Y' && $__Context->item->getTrackbackCount()){ ?>
                    <em class="trackbackNum" title="Trackbacks"><a href="<?php echo $__Context->item->getLink() ?>#trackback"<?php if($__Context->widget_info->new_window){ ?> target="_blank"<?php } ?>><?php echo $__Context->item->getTrackbackCount() ?></a></em>
                <?php } ?>
                <?php if($__Context->widget_info->show_icon=='Y'){ ?>
                    <span class="icon"><?php echo $__Context->item->printExtraImages() ?></span>
                <?php } ?>
            </td>
        <?php }else if($__Context->v=='nickname'){ ?>
            <td><a href="#" onclick="return false;" class="author member_<?php echo $__Context->item->getMemberSrl() ?>"><?php echo $__Context->item->getNickName($__Context->widget_info->nickname_cut_size) ?></a></td>
        <?php }else if($__Context->v=='regdate'){ ?>
            <td class="time"><span class="date"><?php echo $__Context->item->getRegdate("Y-m-d") ?></span> <span class="hour"><?php echo $__Context->item->getRegdate("H:i") ?></span></td>
        <?php } ?>
    <?php } ?>
            </tr>
    <?php $__Context->_idx++ ?>
    <?php } ?>
            </tbody>
        </table>
    </div>
    <?php if($__Context->widget_info->page_count > 1 && $__Context->widget_info->list_count<$__Context->_idx){ ?>
        <ul class="widgetNavigator">
            <li><button type="button" class="prev" title="<?php echo $__Context->lang->cmd_prev ?>" onclick="content_widget_prev(jQuery(this).parents('ul.widgetNavigator').prev('div').children('table.widgetTableA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_prev ?></span></button></li>
            <li><button type="button" class="next" title="<?php echo $__Context->lang->cmd_next ?>" onclick="content_widget_next(jQuery(this).parents('ul.widgetNavigator').prev('div').children('table.widgetTableA'),<?php echo $__Context->widget_info->list_count ?>)"><span><?php echo $__Context->lang->cmd_next ?></span></button></li>
        </ul>
    <?php } ?>
<?php } ?>
