<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $faqs = [

            "Come state implementando la recente decisione della Corte di giustizia dell'Unione 
            europea (CGUE) relativa al diritto all'oblio?" => 
            [
                "text1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                
            ],
            

            "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => 
            [
                "text1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                
                
            ],
            

            "Perché il mio account è associato a un paese?" => 
            [
                "text1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                
                
            ],
            
 
            "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" => 
            [
                "text1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                
                
            ],
            
    
            "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" => 
            [
                "text1" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
                
                
            ],
    ]
    
    ?>

    <?php
    
        foreach ($faqs as $title => $faq) {
            echo "<h1>" . $title . "</h1>";
            // un altro foreach per le faq
            foreach ($faq as $answers){
                echo  $answers["text1"] ;
                

            }
        }
    ?>
    
</body>
</html>