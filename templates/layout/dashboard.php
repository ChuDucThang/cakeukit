<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Cake UIkit 3 </title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.css">

    <!-- CSS FILES -->
    <?= $this->Html->css('uikit.min.css') ?>
    <?= $this->Html->css('dashboard.css') ?>

    <?= $this->Html->css('icon.min.css') ?>
	<style>
		.top-page a{
			font-size:20px;
		}
		.ui.selection.dropdown{
			width:100%;
        }
        @media only screen and (max-width: 100px) {
          #offcanvas-slide {
            display: block;
          }
        }
	</style>

</head>

<body>
    <div id="app">
        <!--HEADER-->
        <?= $this->Html->css('semantic.min.css') ?>
        <?= $this->element('header') ?>
        <!--/HEADER-->

        <!-- LEFT BAR -->
        <?= $this->element('sidebar') ?>
        <!-- /LEFT BAR -->
        <!-- CONTENT -->
        <div id="content" data-uk-height-viewport="expand: true" style="margin-left: 0px; background-color: #ffffff">
            <div class="uk-container uk-container-expand">
                <?= $this->Flash->render() ?>

                <?= $this->fetch('content') ?>

                <?= $this->element('footer') ?>
            </div>
        </div>
    </div>
    <!-- /CONTENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS FILES -->
    <!-- <?= $this->Html->script('uikit.min.js') ?> -->
    <!-- <?= $this->Html->script('uikit-icons.min.js') ?> -->
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.6/dist/semantic.min.js"></script>
    <!-- CDN -->

    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js"></script>

    <!-- VUEJS -->
    <?= $this->Html->script('vue.js') ?>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
    <?= $this->Html->script('common/mixin.js') ?>
    <?= $this->fetch('scriptcontent'); ?>
</body>

</html>