<?php require 'header.php'; ?>
<div id="choice_box">
    <div class="choice">
        <form>
            <input type="checkbox" id="texte_check" name="text" value="Text"> Text </input>
            <input type="checkbox" id="button_check" name="button" value="Button"> Button </input>
			<input type="checkbox" id="input_check" name="input" value="Input"> Input </input>
			<input type="checkbox" id="block_check" name="block" value="Block"> Block </input>
			<input type="checkbox" id="table_check" name="table" value="Table"> Table </input>
        </form>
    </div>
</div>

<!-- SECTION ==> Texte -->
    <section>
        <div id="wrapper">
          
            <div class="accordionButton" id="toggle_text"><p>Texte</p></div>
            <div class="accordionContent">
                 <table>
                    <tr>
                        <th></th>
                        <th>FONT</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                        <th>SHADOW</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="radius-all" value="Example"></td>
                        <td>
                            <select>
                                <option>Arial</option>
                                <option>Helvetica</option>
                                <option>Cambria</option>
                                <option>Times New Roman</option>
                            </select>
                        </td>
                        <td>
                            <select>
            <?php 
                for($i=10; $i<41; $i++){
                    echo '<option value="'.$i.'">'.$i.' px</option>';
                    $i++;
                }
            ?>
                            </select>
                        </td>
                        <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right"></input></td>
                        <td><span class="before-input radius-left">H</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">V</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">B</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">D</span><input type="text" class="shadow radius-right"/></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th></th>
                        <th>FONT</th>
                        <th>SIZE</th>
                        <th>COLOR</th>
                        <th>SHADOW</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="radius-all" value="Example"></td>
                        <td>
                            <select>
                                <option>Arial</option>
                                <option>Helvetica</option>
                                <option>Cambria</option>
                                <option>Times New Roman</option>
                            </select>
                        </td>
                        <td>
                            <select>
            <?php 
                for($i=10; $i<41; $i++){
                    echo '<option value="'.$i.'">'.$i.' px</option>';
                    $i++;
                }
            ?>
                            </select>
                        </td>
                        <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right"></input></td>
                        <td><span class="before-input radius-left">H</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">V</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">B</span><input type="text" class="shadow radius-right"/>
                            <span class="before-input radius-left">D</span><input type="text" class="shadow radius-right"/></td>
                    </tr>
                </table>
            </div>
        </div>         
    </section>

<!-- SECTION ==> Button -->
    <section>
        <div id="wrapper">
            <div class="accordionButton" id="toggle_button"><p>Button</p></div>
            <div class="accordionContent">
                 <table>
                <tr>
                    <th></th>
                    <th>FONT</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>SHADOW</th>
                </tr>
                <tr>
                    <td><input type="button" class="" value="Example"></td>
                    <td>
                        <select>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Cambria</option>
                            <option>Times New Roman</option>
                        </select>
                    </td>
                    <td>
                        <select>
    <?php 
        for($i=10; $i<41; $i++){
            echo '<option value="'.$i.'">'.$i.' px</option>';
            $i++;
        }
    ?>
                        </select>
                    </td>
                    <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker2"></input></td>
                    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                        <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                        <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
                </tr>
            </table>
            </div>
        </div>     
    </section>

<!-- SECTION ==> Input -->
    <section>
        <div id="wrapper">
            <div class="accordionButton" id="toggle_input"><p>Input</p></div>
            <div class="accordionContent">
                 <table>
                <tr>
                    <th></th>
                    <th>FONT</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>SHADOW</th>
                </tr>
                <tr>
                    <td><input type="button" class="" value="Example"></td>
                    <td>
                        <select>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Cambria</option>
                            <option>Times New Roman</option>
                        </select>
                    </td>
                    <td>
                        <select>
    <?php 
        for($i=10; $i<41; $i++){
            echo '<option value="'.$i.'">'.$i.' px</option>';
            $i++;
        }
    ?>
                        </select>
                    </td>
                    <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker2"></input></td>
                    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                        <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                        <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
                </tr>
            </table>
            </div>
        </div>     
    </section>

<!-- SECTION ==> Block -->
    <section>
        <div id="wrapper">
            <div class="accordionButton" id="toggle_block"><p>Block</p></div>
            <div class="accordionContent">
                 <table>
                <tr>
                    <th></th>
                    <th>FONT</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>SHADOW</th>
                </tr>
                <tr>
                    <td><input type="button" class="" value="Example"></td>
                    <td>
                        <select>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Cambria</option>
                            <option>Times New Roman</option>
                        </select>
                    </td>
                    <td>
                        <select>
    <?php 
        for($i=10; $i<41; $i++){
            echo '<option value="'.$i.'">'.$i.' px</option>';
            $i++;
        }
    ?>
                        </select>
                    </td>
                    <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker2"></input></td>
                    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                        <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                        <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
                </tr>
            </table>
            </div>
        </div>     
    </section>

<!-- SECTION ==> Table -->
    <section>
        <div id="wrapper">
            <div class="accordionButton" id="toggle_table"><p>Table</p></div>
            <div class="accordionContent">
                 <table>
                <tr>
                    <th></th>
                    <th>FONT</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>SHADOW</th>
                </tr>
                <tr>
                    <td><input type="button" class="" value="Example"></td>
                    <td>
                        <select>
                            <option>Arial</option>
                            <option>Helvetica</option>
                            <option>Cambria</option>
                            <option>Times New Roman</option>
                        </select>
                    </td>
                    <td>
                        <select>
    <?php 
        for($i=10; $i<41; $i++){
            echo '<option value="'.$i.'">'.$i.' px</option>';
            $i++;
        }
    ?>
                        </select>
                    </td>
                    <td><span class="before-input radius-left">#</span><input type="text" class="picker radius-right" id="picker2"></input></td>
                    <td><span class="before-input radius-left shadow">Horizontal</span><input type="text" class="shadow radius-right" name="horizontal"/>
                        <span class="before-input radius-left shadow">Vertical</span><input type="text" class="shadow radius-right" name="vertical"/><br>
                        <span class="before-input radius-left shadow">Blur</span><input type="text" class="shadow radius-right" name="blur"/>
                        <span class="before-input radius-left shadow">Distance</span><input type="text" class="shadow radius-right" name="distance"/></td>
                </tr>
            </table>
            </div>
        </div>     
    </section>

<?php require 'footer.php'; ?>