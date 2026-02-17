<!DOCTYPE html>
<html lang="it">
<head>
    <title>Questionario sul lavoro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="global.css?v=<?php echo date("YmdHis"); ?>">
</head>
<body>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "my_antonybuffone1") or die("errore connessione, prova a ricaricare la pagina, altrimenti contatta il proprietario del sito :)");
if ($_GET["pag"] == "") {

    // HOME PAGE, visualizzo il questionario
    echo '<div class="w3-container question-container">' . "\n";
    echo '<form method="get" action="index.php">' . "\n";
    echo '<h2 class="w3-text w3-center">Questionario sul lavoro</h2>' . "\n";
    echo '<p>Ciao! questo è un questionario sulla prevenzione dei rischi psico-fisici sul lavoro attraverso l\'utilizzo delle tecnologie.<br>
    Il questionario è completamente anonimo ed è a fini statistici per la didattica.<br>
    Dopo questa piccola introduzione puoi completare i seguenti campi :)</p>' . "\n";
	
    
    
    
    
    
    
    echo '<div style="margin-bottom: 60px;"></div>';
    echo '<h2 class="w3-text">Domande personali</h2>' . "\n";
    
    echo '<p>A quale fascia d’età appartieni?</p>' . "\n";
    echo '<div class="w3-row-padding">' . "\n";
    echo '  <div class="w3-quarter"><label><input type="radio" name="ris1" value="1" class="w3-radio"> 16-20</label></div>' . "\n";
    echo '  <div class="w3-quarter"><label><input type="radio" name="ris1" value="2" class="w3-radio"> 21-30</label></div>' . "\n";
    echo '  <div class="w3-quarter"><label><input type="radio" name="ris1" value="3" class="w3-radio"> 31-40</label></div>' . "\n";
    echo '  <div class="w3-quarter"><label><input type="radio" name="ris1" value="4" class="w3-radio"> 41-50</label></div>' . "\n";
    echo '  <div class="w3-quarter"><label><input type="radio" name="ris1" value="5" class="w3-radio"> 51-60+</label></div>' . "\n";
    echo '</div>' . "\n";
    echo "<hr>\n";
    
    
    echo '<p>Quanto tempo trascorri mediamente al lavoro ogni giorno?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<input type="number" name="ris2" class="w3-input w3-border" min = "1" max = "24" placeholder="Inserisci il numero di ore" required>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    
    
    
    
    
    
    
    
    echo '<h2 class="w3-text">Domande generali</h2>' . "\n";
    
    echo '<p>Hai notato l\'introduzione di attrezzature o dispositivi tecnologici finalizzati al miglioramento della tua salute psico-fisica nel tuo ambiente di lavoro?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris3" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris3" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris3" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Sei propenso ad aggiornarti e ad adottare nuove tecnologie che potrebbero contribuire a ridurre i rischi psico-fisici nel tuo lavoro?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris4" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris4" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris4" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Ricevi formazione specifica sull\'interazione con nuove tecnologie per garantire la tua sicurezza e il benessere sul lavoro?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris5" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris5" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris5" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Accedi a piattaforme digitali per la formazione continua e lo sviluppo professionale?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris6" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris6" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris6" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Che tipo di lavoro svolgi?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<a href="#lavoro-dufficio" class="w3-button w3-blue">D\'ufficio</a>' . "\n";
    echo '<a href="#lavoro-manuale" class="w3-button w3-red">Manuale</a>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    
    
    
    
    
    
    
    
    echo '<div style="margin-bottom: 350px;"></div>';
    echo '<h2 id="lavoro-dufficio" class="w3-text">Domande sul lavoro d\'ufficio</h2>' . "\n";
    
    echo '<p>Hai notato l\'uso di intelligenza artificiale nel tuo settore per migliorare l\'efficienza e ridurre il carico di lavoro?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris7" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris7" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris7" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>La tua azienda ha implementato politiche di smart working per ridurre lo stress legato agli spostamenti?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris8" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris8" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris8" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>La tua azienda ha adottato misure ergonomiche, come sedie o strumenti specifici, per migliorare il comfort e la salute fisica dei dipendenti in ambiente d\'ufficio?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris9" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris9" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris9" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Sei mai stato vittima di un incidente o dolori sul luogo di lavoro che attraverso l’utilizzo di tecnologie innovative sarebbe stato possibile prevenire? Ad esempio l’utilizzo di una sedia non ergonomica e confortevole</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris10" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris10" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris10" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>La tua azienda fornisce dispositivi indossabili con sensori integrati per monitorare la sicurezza fisica dei dipendenti, come orologi per il battito cardiaco, per la gestione dello stress o per situazioni di pericolo?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris11" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris11" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris11" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Se svolgi anche un lavoro manuale clicca sull\'apposito bottone, altrimenti puoi salvare le tue risposte :)</p>' . "\n";
    echo '<a href="#lavoro-manuale" class="w3-button w3-red">Lavoro manuale</a>' . "\n";
    echo '<input type="hidden" name="pag" value="salvarisposte">' . "\n";
    echo '<input type="submit" value="Salva le tue risposte" class="w3-button w3-green">' . "\n";
    
    
    
    
    
    
    
    
    echo '<div style="margin-bottom: 350px;"></div>';
    echo '<h3 id="lavoro-manuale" class="w3-text">Domande sul lavoro manuale</h3>' . "\n";
    
    echo '<p>La tua azienda fornisce dispositivi indossabili con sensori integrati per monitorare la sicurezza fisica dei dipendenti, come orologi per il battito cardiaco, per la gestione dello stress o per situazioni di pericolo?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris12" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris12" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris12" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>La tua azienda dispone di attrezzature progettate per ridurre il rischio di infortuni legati a posture o carichi pesanti e migliorare l\'ergonomia o il comfort?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris13" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris13" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris13" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Sei mai stato vittima di un incidente o dolori sul luogo di lavoro che attraverso l’utilizzo di tecnologie innovative sarebbe stato possibile prevenire? Ad esempio un esoscheletro che riducesse il carico di lavoro</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris14" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris14" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris14" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Hai notato l\'uso di intelligenza artificiale nel tuo settore per migliorare l\'efficienza e ridurre il carico di lavoro?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris15" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris15" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris15" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Pensi che l\'automatizzazione o l\'introduzione di robot nel settore possa influenzare la sicurezza fisica e il benessere dei lavoratori manuali nei prossimi anni?</p>' . "\n";
    echo '<div class="w3-container w3-cell-row">' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris16" value="1" class="w3-radio"> No</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris16" value="2" class="w3-radio"> In parte</div>' . "\n";
    echo '<div class="w3-cell"><input type="radio" name="ris16" value="3" class="w3-radio"> Si</div>' . "\n";
    echo "</div>\n";//w3-cell-row
    echo "<hr>\n";
    
    echo '<p>Se svolgi anche un lavoro d\'ufficio clicca sull\'apposito bottone, altrimenti puoi salvare le tue risposte :)</p>' . "\n";
    echo '<a href="#lavoro-dufficio" class="w3-button w3-blue">Lavoro d\'ufficio</a>' . "\n";
    echo '<input type="hidden" name="pag" value="salvarisposte">' . "\n";
    echo '<input type="submit" value="Salva le tue risposte" class="w3-button w3-green">' . "\n";
    echo "</form>\n";
    echo "</div>\n";
    
    
    
}
if ($_GET["pag"] == "salvarisposte") {
    // Qui salviamo nel DB le risposte raccolte dal modulo
    $q = "insert into questionari (data,ris1,ris2,ris3,ris4,ris5,ris6,ris7,ris8,ris9,ris10,ris11,ris12,ris13,ris14,ris15,ris16) values (";
    $q .= "'" . date("Y-m-d H:i:s") . "',";
    $q .= (isset($_GET["ris1"])?$_GET["ris1"] : 'NULL'). ",";
    $q .= (isset($_GET["ris2"])?$_GET["ris2"] : 'NULL'). ",";
    $q .= (isset($_GET["ris3"])?$_GET["ris3"] : 'NULL'). ",";
    $q .= (isset($_GET["ris4"])?$_GET["ris4"] : 'NULL'). ",";
    $q .= (isset($_GET["ris5"])?$_GET["ris5"] : 'NULL'). ",";
    $q .= (isset($_GET["ris6"])?$_GET["ris6"] : 'NULL'). ",";
    $q .= (isset($_GET["ris7"])?$_GET["ris7"] : 'NULL'). ",";
    $q .= (isset($_GET["ris8"])?$_GET["ris8"] : 'NULL'). ",";
    $q .= (isset($_GET["ris9"])?$_GET["ris9"] : 'NULL'). ",";
    $q .= (isset($_GET["ris10"])?$_GET["ris10"] : 'NULL'). ",";
    $q .= (isset($_GET["ris11"])?$_GET["ris11"] : 'NULL'). ",";
    $q .= (isset($_GET["ris12"])?$_GET["ris12"] : 'NULL'). ",";
    $q .= (isset($_GET["ris13"])?$_GET["ris13"] : 'NULL'). ",";
    $q .= (isset($_GET["ris14"])?$_GET["ris14"] : 'NULL'). ",";
    $q .= (isset($_GET["ris15"])?$_GET["ris15"] : 'NULL'). ",";
    $q .= (isset($_GET["ris16"])?$_GET["ris16"] : 'NULL'). ")";
    $rq = mysqli_query($conn,$q) or die("err:".$q);
    echo '<div class="w3-container question-container">' . "\n";
    echo '<h2 class="w3-text">Grazie per aver compilato il questionario!</h2>' . "\n";
    echo '<p>Il tuo tempo dedicato e le tue risposte sono molto importanti :)</p>' . "\n";
    
}
mysqli_close($conn);
?>
</body>
</html>