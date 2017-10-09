<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content-cards">
<?php while($this->next()): ?>
  <article class="content-card post">
    <div class="card">
      <a href="<?php $this->permalink() ?>" class="card-image " style="background-image: url(<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
$img = $matches[2][0];
echo <<<Html
{$img}
Html;
}
?><?php endif; ?>)">
      </a>
      <header class="card-header">
        <div class="card-title">
          <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        </div>
      </header>
      <section class="card-body">
        <div class="card-body-text">
          <?php $this->excerpt(120, ' ...'); ?>
        </div>
      </section>
      <footer class="card-footer">
        <time class="post-date" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date(); ?></time>
         · <?php $this->category(', '); ?>
      </footer>
    </div>
  </article>
<?php endwhile; ?>
</div>

<nav class="pagination" role="navigation">
<?php $this->pageLink('<x aria-label="Previous" class="btn btn-primary">上一页</x>'); ?>
<?php $this->pageLink('<x aria-label="Next" class="btn btn-primary">下一页</x>','next'); ?>
</nav>


<?php $this->need('footer.php'); ?>