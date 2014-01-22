<?php REQUIRE 'header.php'; ?>
<div id="choice_box">
    <div class="choice">
        <form>
            <input type="checkbox" name="text" value="Text"> Text </input>
        <input type="checkbox" name="button" value="Button"> Button </input>
    <input type="checkbox" name="input" value="Input"> Input </input>
<input type="checkbox" name="block" value="Block"> Block </input>
<input type="checkbox" name="table" value="Table"> Table </input>
</form>
</div>
</div>
<section>
    <div class="toggle_text">
        <a href="" class="toggler">Text</a>
    </div>	
    <div class="toggle">
        <table>
            <tr>
                <th></th>
                <th>FONT</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>TEXT-SHADOW</th>
            </tr>
            <tr>
                <td><p contenteditable="true" class="radius-all example" name="text1">Example</p></td>
                <td>
                    <select class="font" rel="text1">
                        <option>Arial</option>
                        <option>Helvetica</option>
                        <option>Cambria</option>
                        <option>Times New Roman</option>
                    </select>
                </td>
                <td>
                    <select class="size" rel="text1">
                        <?php 
for($i=10; $i<41; $i++){
    echo '<option value="'.$i.'">'.$i.' px</option>';
    $i++;
}
                        ?>
                    </select>
                </td>
                <td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="text1"></input></td>
        <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="text-shadow horizontal shadow radius-right" value="0" rel="text1"/>
            <span class="before-input radius-left shadow">Vertical</span><input type="text" class="text-shadow vertical shadow radius-right" value="0" rel="text1"/><br>
            <span class="before-input radius-left shadow">Blur</span><input type="text" class="text-shadow blur shadow radius-right" value="0" rel="text1"/>
            <span class="before-input radius-left shadow">#</span><input type="text" class="text-shadow shadow picker radius-right" width="40" rel="text1"></input>
</td>
</tr>
<tr>
    <td><p contenteditable="true" class="radius-all example" name="text2">Example</p></td>
    <td>
        <select class="select" rel="text2">
            <option>Arial</option>
            <option>Helvetica</option>
            <option>Cambria</option>
            <option>Times New Roman</option>
        </select>
    </td>
    <td>
        <select class="size" rel="text2">
            <?php 
for($i=10; $i<41; $i++){
    echo '<option value="'.$i.'">'.$i.' px</option>';
    $i++;
}
            ?>
        </select>
    </td>
    <td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="text2"></input></td>
<td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="text-shadow horizontal shadow radius-right" value="0" rel="text2"/>
    <span class="before-input radius-left shadow">Vertical</span><input type="text" class="text-shadow vertical shadow radius-right" value="0" rel="text2"/><br>
    <span class="before-input radius-left shadow">Blur</span><input type="text" class="text-shadow blur shadow radius-right" value="0" rel="text2"/>
    <span class="before-input radius-left shadow">#</span><input type="text" class="text-shadow shadow picker radius-right" width="40" rel="text2"></input>
</td>
</tr>
</table>
</div>

<div class="toggle_text">
    <a href="" class="toggler">Button</a>
</div>	
<div class="toggle">
    <table>
        <tr>
            <th></th>
            <th>FONT</th>
            <th>SIZE</th>
            <th>COLOR</th>
            <th>BOX-SHADOW</th>
        </tr>
        <tr>
            <td><input type="button" class="" value="Example" name="button1"></td>
            <td>
                <select class="font" rel="button1">
                    <option>Arial</option>
                    <option>Helvetica</option>
                    <option>Cambria</option>
                    <option>Times New Roman</option>
                </select>
            </td>
            <td>
                <select class="size" rel="button1">
                    <?php 
for($i=10; $i<41; $i++){
    echo '<option value="'.$i.'">'.$i.' px</option>';
    $i++;
}
                    ?>
                </select>
            </td>
            <td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="button1"></input></td>
    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="button1"/>
        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="button1"/>
        <span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="button1"/><br>
        <span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="button1"/>
        <span class="before-input radius-all shadow">Inset</span><input type="checkbox" class="box-shadow inset shadow radius-right" rel="button1"/>
        <span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="button1"></input>
</td>
</tr>
</table>
</div>
<div class="toggle_text">
    <a href="" class="toggler">Input</a>
</div>	
<div class="toggle">
    <table>
        <tr>
            <th></th>
            <th>FONT</th>
            <th>SIZE</th>
            <th>COLOR</th>
            <th>BOX-SHADOW</th>
        </tr>
        <tr>
            <td><input type="text" class="" value="Example" name="input1"></td>
            <td>
                <select class="font" rel="input1">
                    <option>Arial</option>
                    <option>Helvetica</option>
                    <option>Cambria</option>
                    <option>Times New Roman</option>
                </select>
            </td>
            <td>
                <select class="size" rel="input1">
                    <?php 
for($i=10; $i<41; $i++){
    echo '<option value="'.$i.'">'.$i.' px</option>';
    $i++;
}
                    ?>
                </select>
            </td>
            <td><span class="before-input radius-left">#</span><input type="text" class="color picker radius-right" rel="input1"></input></td>
    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="box-shadow horizontal shadow radius-right" value="0" rel="input1"/>
        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="box-shadow vertical shadow radius-right" value="0" rel="input1"/>
        <span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="input1"/><br>
        <span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="input1"/>
        <span class="before-input radius-all shadow">Inset</span><input type="checkbox" class="box-shadow inset shadow radius-right" rel="input1"/>
        <span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="input1"></input>
</td>
</tr>
</table>
</section>
<section>
    <div id="css_generate">
        <form action="customize.php" method="post">
            <textarea name="stylecss"></textarea>
            <br>
            <input type="submit" value="Download" />
        </form>   
    </div>
</section>
<?php
if (!empty($_POST)){
    $stylecss = $_POST['stylecss'];
    
    //Création du fichier css
    $filenamecss = "PeakCSS"; 
    $opencss = fopen("download/".$filenamecss.".css", "w");
    fwrite($opencss, $stylecss); 
    fclose($opencss); 
    
    //Création du fichier html
        $textehtml="    
<!DOCTYPE html>
<html>
	<head>
        <meta charset='utf-8'>
        <title>PeakCSS - Démo</title>
        <meta name='viewport' content='width=device-width'>
        <link type='text/css' rel='stylesheet' href='PeakCSS.css'/>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div style='max-width:75%; min-width:800px;margin:auto;position:relative;'>
			<H1 style='color:#3a85bc; font-size:40px; font-family:Raleway; font-weight:100; text-align:center; margin-bottom:50px'>PeakCSS</H1>
			
			<p style='color:#3a85bc; margin-top:50px'>Example</p>
			<div style='padding: 9px 14px; background-color: #f7f7f9; border: 1px solid #e1e1e8; border-radius: 4px;'>
				<code type='html'>
					<span style='color:#3a85bc'>&lt;p</span>
					<span style='color:#27ae60'>class</span><span style='color:#c0392b'>='test'</span><span style='color:#3a85bc'>&gt;</span><span>Example</span><span style='color:#3a85bc'>&lt;/p&gt;</span>
				</code>
			</div>
			
		</div>
	</body>
</html>";
    $filenamehtml = "PeakHtml"; 
    $openhtml = fopen("download/".$filenamehtml.".html", "w");
    fwrite($openhtml, $textehtml); 
    fclose($openhtml); 
    
    //Zippage des fichiers
    $zip = new ZipArchive(); 
    if($zip->open('download/PeakCSS.zip', ZipArchive::CREATE) == TRUE){
        $zip->addFile('download/PeakHTML.html','PeakHTML.html');
        $zip->addFile('download/PeakCSS.css','PeakCSS.css');
        $zip->close();
    }else{
        echo 'Impossible de récupérer le fichier';
    }    
    
    //Téléchargement 
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="PeakCSS.zip"');
    readfile('download/PeakCSS.zip');
    unlink('download/PeakHTML.html');
    unlink('download/PeakCSS.css');
    unlink('download/PeakCSS.zip');
}

require 'footer.php'; ?>
