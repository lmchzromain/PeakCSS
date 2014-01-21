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
                    <span class="before-input radius-left shadow">Blur</span><input type="text" class="box-shadow blur shadow radius-right" value="0" rel="input"/><br>
                    <span class="before-input radius-left shadow">Spread</span><input type="text" class="box-shadow spread shadow radius-right" value="0" rel="input"/>
                    <span class="before-input radius-all shadow">Inset</span><input type="checkbox" class="box-shadow inset shadow radius-right" rel="input1"/>
                    <span class="before-input radius-left shadow">#</span><input type="text" class="box-shadow shadow picker radius-right" width="40" rel="input"></input>
                </td>
            </tr>
        </table>
    </div>
</section>
<?php require 'footer.php'; ?>