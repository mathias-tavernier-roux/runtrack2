<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 5 Job 1</title>
</head>
<body>
    <?php 
    function bonjour($jour)
    {
        if ($jour == true)
        {
            return "bonjour</br>";
        }
        else
        {
            return "bonsoir</br>";
        }
        
    }
    echo bonjour(true);
    echo "ou</br>";
    echo bonjour(false);
    ?>
</body>
</html>