<?php

/* if you want to update news: update the news-array.php file */
include ('pages/news-array.php');

$head['title'] = R_('News');
$head['feed'] = 'https://xfce.org/feed?lang='.$lang;

echo '<h1>'.$head['title'].'</h1>';

echo '<span class="rss"><a href="'.$head['feed'].'">'.R_('Subscribe to RSS feed').'</a></span>';

if (isset ($_GET['post']))
  $only_stamp = (int) $_GET['post'];
else
  $only_stamp = 0;

$has_items = false;

$counter = 0;

foreach ($news as $item)
{
  $stamp = strtotime ($item['date']);

  if ($only_stamp > 0 && $only_stamp != $stamp)
    continue;

  $link = '/about/news/?post='.$stamp;
  $counter++;

  if (!empty ($item['version']))
      $title = sprintf (R_('Xfce %s released'), $item['version']);
    else
      $title = $item['title'];

	$head['title'] .= ' – ' . $title;

  echo '<div class="newsitem">';

  echo '<h2 id="post-'.$stamp.'">'.$title.'</h2>'."\n";

  echo '<div class="post-date"><span class="post-month">'. date ('M', $stamp).
       '</span> <span class="post-day"><span class="day">'. date ('d', $stamp).
       '</span><br /><span class="year">'.date ('Y', $stamp).'</span></span></div>';

  echo '<div class="post-wrap">';

  if ($counter < 2)
    {
      foreach ($item['paragraphs'] as $p)
      {
        if (is_array($p))
        {
          foreach ($p as $whatever)
          {
            echo $whatever."\n";
          }
        }
        else
        {
          echo '<p>'.$p.'</p>'."\n";
        }
      }
      
      if (!empty ($item['version']))
      {
        echo '<ul>';
          echo '<li><a href="http://archive.xfce.org/xfce/'.$item['version'].'/">'.R_('Download').' <span>&ndash; http://archive.xfce.org/xfce/'.$item['version'].'/</span></a></li>';
          echo '<li><a href="/download/changelogs/'.$item['version'].'/">'.R_('Changes in this release').'</a></li>';
          echo '<li><a href="'.$link.'">'.R_('Permalink').'</a></li>';
        echo '</ul>';
      }
    }
  else
    {
      echo '<p>'.$item['paragraphs'][0] .' ';
      learnmore ($link);
      echo '</p>';
    }

  echo '</div>'; # .post-wrap

  echo '</div>'; # .newsitem

  $has_items = true;
}

if (!$has_items)
{
  echo '<p>'.R_('No news articles found.').'</p>';
}

?>
