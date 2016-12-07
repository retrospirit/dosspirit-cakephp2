<?php
if (!isset($disqusCommentId)) {
    echo 'Need a disqus comment id for handling threads correctly.';
} else {
?>
<div id="disqus_thread"></div>
<script type="text/javascript">
    var disqus_shortname = 'dosspirit';
    var disqus_developer = 1;
    var disqus_identifier = '<?php echo $disqusCommentId; ?>';
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>
<?php
}
?>