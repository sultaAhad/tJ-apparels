<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "FIT & MEASUREMENTS";
$title = "Size Guide";
$desc = "Find your exact fit with our detailed measurement charts and conversion tools.";
$currentPage = "Size Chart";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<!-- Main Wrapper -->
<div class="tj-size-wrapper py-5">
    <div class="container py-3">

        <!-- Category Selection Tabs -->
        <div class="tj-size-tabs">
            <button class="tj-size-tab-btn active" onclick="switchTab(event, 'women')">Women's Sizing</button>
            <button class="tj-size-tab-btn" onclick="switchTab(event, 'men')">Men's Sizing</button>
            <button class="tj-size-tab-btn" onclick="switchTab(event, 'kids')">Kids' Sizing</button>
        </div>

        <!-- Unit Switcher & Tables Area -->
        <div class="mb-5 pb-4">
            <div class="tj-unit-switcher">
                <span>Unit:</span>
                <button class="tj-unit-btn active" id="btn-cm" onclick="setUnit('cm')">CM</button>
                <button class="tj-unit-btn" id="btn-inch" onclick="setUnit('inch')">Inches</button>
            </div>

            <!-- 1. WOMEN'S TABLE -->
            <div id="women" class="tj-table-container tab-content-pane active">
                <table class="table tj-custom-table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>US Size</th>
                            <th>Bust</th>
                            <th>Waist</th>
                            <th>Hips</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>XS</strong></td>
                            <td>0 - 2</td>
                            <td class="val" data-cm="82-85" data-inch="32-33.5">82-85 cm</td>
                            <td class="val" data-cm="62-65" data-inch="24.5-25.5">62-65 cm</td>
                            <td class="val" data-cm="88-91" data-inch="34.5-35.5">88-91 cm</td>
                        </tr>
                        <tr>
                            <td><strong>S</strong></td>
                            <td>4 - 6</td>
                            <td class="val" data-cm="86-89" data-inch="34-35">86-89 cm</td>
                            <td class="val" data-cm="66-69" data-inch="26-27">66-69 cm</td>
                            <td class="val" data-cm="92-95" data-inch="36-37">92-95 cm</td>
                        </tr>
                        <tr>
                            <td><strong>M</strong></td>
                            <td>8 - 10</td>
                            <td class="val" data-cm="90-93" data-inch="35.5-36.5">90-93 cm</td>
                            <td class="val" data-cm="70-73" data-inch="27.5-28.5">70-73 cm</td>
                            <td class="val" data-cm="96-99" data-inch="37.5-39">96-99 cm</td>
                        </tr>
                        <tr>
                            <td><strong>L</strong></td>
                            <td>12 - 14</td>
                            <td class="val" data-cm="94-99" data-inch="37-39">94-99 cm</td>
                            <td class="val" data-cm="74-79" data-inch="29-31">74-79 cm</td>
                            <td class="val" data-cm="100-104" data-inch="39.5-41">100-104 cm</td>
                        </tr>
                        <tr>
                            <td><strong>XL</strong></td>
                            <td>16</td>
                            <td class="val" data-cm="100-105" data-inch="39.5-41.5">100-105 cm</td>
                            <td class="val" data-cm="80-85" data-inch="31.5-33.5">80-85 cm</td>
                            <td class="val" data-cm="105-110" data-inch="41.5-43.5">105-110 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 2. MEN'S TABLE -->
            <div id="men" class="tj-table-container tab-content-pane">
                <table class="table tj-custom-table">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Chest</th>
                            <th>Neck</th>
                            <th>Waist</th>
                            <th>Sleeve</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>S</strong></td>
                            <td class="val" data-cm="91-96" data-inch="36-38">91-96 cm</td>
                            <td class="val" data-cm="37-38" data-inch="14.5-15">37-38 cm</td>
                            <td class="val" data-cm="76-81" data-inch="30-32">76-81 cm</td>
                            <td class="val" data-cm="84-86" data-inch="33-34">84-86 cm</td>
                        </tr>
                        <tr>
                            <td><strong>M</strong></td>
                            <td class="val" data-cm="97-102" data-inch="38-40">97-102 cm</td>
                            <td class="val" data-cm="39-40" data-inch="15.5-16">39-40 cm</td>
                            <td class="val" data-cm="82-87" data-inch="32-34">82-87 cm</td>
                            <td class="val" data-cm="86-89" data-inch="34-35">86-89 cm</td>
                        </tr>
                        <tr>
                            <td><strong>L</strong></td>
                            <td class="val" data-cm="103-108" data-inch="41-43">103-108 cm</td>
                            <td class="val" data-cm="41-42" data-inch="16.5-17">41-42 cm</td>
                            <td class="val" data-cm="88-93" data-inch="35-37">88-93 cm</td>
                            <td class="val" data-cm="89-91" data-inch="35-36">89-91 cm</td>
                        </tr>
                        <tr>
                            <td><strong>XL</strong></td>
                            <td class="val" data-cm="109-114" data-inch="43-45">109-114 cm</td>
                            <td class="val" data-cm="43-44" data-inch="17.5-18">43-44 cm</td>
                            <td class="val" data-cm="94-99" data-inch="37-39">94-99 cm</td>
                            <td class="val" data-cm="91-94" data-inch="36-37">91-94 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 3. KIDS' TABLE -->
            <div id="kids" class="tj-table-container tab-content-pane">
                <table class="table tj-custom-table">
                    <thead>
                        <tr>
                            <th>Age / Size</th>
                            <th>Height</th>
                            <th>Chest</th>
                            <th>Waist</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>3-4 Years</strong></td>
                            <td class="val" data-cm="98-104" data-inch="38-41">98-104 cm</td>
                            <td class="val" data-cm="55-57" data-inch="21.5-22.5">55-57 cm</td>
                            <td class="val" data-cm="52-54" data-inch="20.5-21">52-54 cm</td>
                        </tr>
                        <tr>
                            <td><strong>5-6 Years</strong></td>
                            <td class="val" data-cm="110-116" data-inch="43-45">110-116 cm</td>
                            <td class="val" data-cm="59-61" data-inch="23-24">59-61 cm</td>
                            <td class="val" data-cm="55-57" data-inch="21.5-22.5">55-57 cm</td>
                        </tr>
                        <tr>
                            <td><strong>7-8 Years</strong></td>
                            <td class="val" data-cm="122-128" data-inch="48-50">122-128 cm</td>
                            <td class="val" data-cm="63-67" data-inch="25-26.5">63-67 cm</td>
                            <td class="val" data-cm="58-60" data-inch="22.5-23.5">58-60 cm</td>
                        </tr>
                        <tr>
                            <td><strong>9-10 Years</strong></td>
                            <td class="val" data-cm="134-140" data-inch="53-55">134-140 cm</td>
                            <td class="val" data-cm="69-73" data-inch="27-28.5">69-73 cm</td>
                            <td class="val" data-cm="61-64" data-inch="24-25">61-64 cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- HOW TO MEASURE SECTION -->
        <div class="mt-5 pt-4">
            <h3 class="tj-section-title mb-4">How to Measure</h3>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-measure-card">
                        <div class="tj-measure-icon"><i class="fa-solid fa-user-tag"></i></div>
                        <h5>1. Bust / Chest</h5>
                        <p>Measure around the fullest part of the chest, keeping the measuring tape horizontal under your arms and straight across your back.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-measure-card">
                        <div class="tj-measure-icon"><i class="fa-solid fa-ruler"></i></div>
                        <h5>2. Natural Waist</h5>
                        <p>Measure around the narrowest part of your waistline (typically where your body bends side to side), keeping the tape comfortably loose.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-measure-card">
                        <div class="tj-measure-icon"><i class="fa-solid fa-arrows-split-up-and-left"></i></div>
                        <h5>3. Hips</h5>
                        <p>Stand with your feet together and measure around the fullest part of your hips and rear, ensuring the tape stays parallel to the floor.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JavaScript for Tab Switching and Unit Converter -->
<script>
function switchTab(evt, categoryName) {
    let i, pane, btn;
    pane = document.getElementsByClassName("tab-content-pane");
    for (i = 0; i < pane.length; i++) {
        pane[i].classList.remove("active");
    }
    btn = document.getElementsByClassName("tj-size-tab-btn");
    for (i = 0; i < btn.length; i++) {
        btn[i].classList.remove("active");
    }
    document.getElementById(categoryName).classList.add("active");
    evt.currentTarget.classList.add("active");
}

function setUnit(unit) {
    document.getElementById('btn-cm').classList.remove('active');
    document.getElementById('btn-inch').classList.remove('active');
    
    if(unit === 'cm') {
        document.getElementById('btn-cm').classList.add('active');
    } else {
        document.getElementById('btn-inch').classList.add('active');
    }

    let cells = document.querySelectorAll('.val');
    cells.forEach(cell => {
        if(unit === 'cm') {
            cell.innerText = cell.getAttribute('data-cm') + ' cm';
        } else {
            cell.innerText = cell.getAttribute('data-inch') + ' in';
        }
    });
}
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->