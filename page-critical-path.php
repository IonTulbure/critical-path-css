<?php /* Template Name: Critical Path */ ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">

<h1>Critical render path</h1>
<button>Click test</button>

<h2 class="important">Above the fold</h2>

<h2 class="secondary">Bellow the fold</h2>

<script>

// get template directory
var theme_directory = "<?php echo get_template_directory_uri() ?>";

// load bellow the fold stylesheet
const loadStyleSheet = src => {
    if(document.createStylesheet) {
        document.createStylesheet(src)
    } else {
        const stylesheet = document.createElement('link');
        stylesheet.href = src;
        stylesheet.type = 'text/css';
        stylesheet.rel = 'stylesheet';
        document.getElementsByTagName('head')[0].appendChild(stylesheet)    
    }
}

window.onload = function() {
    console.log('window done!');
    loadStyleSheet( theme_directory + '/assets/style-sec.css')
}
</script>