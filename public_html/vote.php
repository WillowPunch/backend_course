<?php
include 'functions.php';
include 'vote_controller.php';
?>
<?php echo template_header('Poll Vote'); ?>
<!-- Vote View part. -->
<div class="content poll-vote">
	<h2><?=$poll['title']?></h2>
	<p><?=$poll['description']?></p>
    <form action="vote.php?id=<?=$_GET['id']?>" method="post">
        <?php for ($i = 0; $i < count($poll_answers); $i++): ?>
        <label>
            <input type="radio" name="poll_answer" value="<?=$poll_answers[$i]['id']?>"<?=$i == 0 ? ' checked' : ''?>>
            <?=$poll_answers[$i]['title']?>
        </label>
        <?php endfor; ?>
        <div>
            <input type="submit" value="Vote">
            <a href="result.php?id=<?=$poll['id']?>">View Result</a>
        </div>
    </form>
</div>

<?php echo template_footer(); ?>