<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Notre équipe - Victor Hugo Manjushree Vidyapith</title>

    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, une école népalaise pour une éducation de qualité et gratuite." />

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>
    
    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/team.css" />
    
    <!-- Direction stylesheet -->
    <link rel="stylesheet" href="components/team/team-direction/team-direction.css" />
    
    <!-- Team list stylesheet -->
    <link rel="stylesheet" href="components/team/team-list/team-list.css" />
    
    <!-- Accordion stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-accordion/vhmavi-accordion.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <!-- Direction include -->
        <?php include("components/team/team-direction/team-direction.php"); ?>

        <!-- Team list include -->
        <?php include("components/team/team-list/team-list.php"); ?>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/team/team.jpg" alt="Des enseignants" id="vhmavi-img-team" />
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>
    
    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!-- Specific script loading -->
    <script src="js/team.js"></script>

    <!-- Accordion script loading -->
    <script src="components/vhmavi-accordion/vhmavi-accordion.js"></script>
    
    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>