<!-- =========================================
     TJ ADVANCED SIZE GUIDE MODAL COMPONENT
========================================= -->
<div class="modal fade" id="sizeGuideModal" tabindex="-1" aria-labelledby="sizeGuideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background: #0d0d21; border: 1px solid var(--tj-border); color: #fff; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
            
            <!-- Modal Header -->
            <div class="modal-header border-bottom border-secondary px-4 pt-4 pb-3" style="border-color: var(--tj-border) !important;">
                <h5 class="modal-title fw-bold" id="sizeGuideModalLabel" style="color: #fff;">
                    <i class="fa-solid fa-ruler-combined me-2" style="color: var(--tj-pink);"></i> Interactive Size Chart
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-4 p-md-5">
                
                <!-- Category Tabs (Women's, Men's, Kids') -->
                <div class="d-flex justify-content-center mb-4 flex-wrap gap-2">
                    <button type="button" class="btn rounded-pill px-4 py-2 size-tab-btn active" onclick="switchSizingCategory('womens', this)" style="background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink)); border: none; color: #fff; font-weight: 600; font-size: 13px; box-shadow: 0 4px 15px rgba(233,54,167,0.4);">
                        Women's Sizing
                    </button>
                    <button type="button" class="btn rounded-pill px-4 py-2 size-tab-btn" onclick="switchSizingCategory('mens', this)" style="background: rgba(255,255,255,0.03); border: 1px solid var(--tj-border); color: #fff; font-weight: 600; font-size: 13px;">
                        Men's Sizing
                    </button>
                    <button type="button" class="btn rounded-pill px-4 py-2 size-tab-btn" onclick="switchSizingCategory('kids', this)" style="background: rgba(255,255,255,0.03); border: 1px solid var(--tj-border); color: #fff; font-weight: 600; font-size: 13px;">
                        Kids' Sizing
                    </button>
                </div>

                <!-- Unit Switcher (CM / Inches) -->
                <div class="d-flex justify-content-end align-items-center mb-3 gap-2">
                    <span class="text-white-50" style="font-size: 12px; font-weight: 600;">Unit:</span>
                    <div class="btn-group" role="group" aria-label="Unit Switcher">
                        <button type="button" class="btn btn-sm px-3 rounded-start-pill unit-btn active-unit" onclick="switchUnit('cm')" id="cmBtn" style="background: var(--tj-purple); border: 1px solid var(--tj-border); color: #fff; font-size: 11px; font-weight: 700;">CM</button>
                        <button type="button" class="btn btn-sm px-3 rounded-end-pill unit-btn" onclick="switchUnit('inches')" id="inchBtn" style="background: rgba(255,255,255,0.03); border: 1px solid var(--tj-border); color: #fff; font-size: 11px; font-weight: 700;">Inches</button>
                    </div>
                </div>

                <!-- Tables Container -->
                <div class="table-responsive" style="background: #11112b; border: 1px solid var(--tj-border); border-radius: 16px; padding: 10px;">
                    
                    <!-- 1. Women's Table -->
                    <div class="sizing-table-content" id="womens-table">
                        <table class="table table-dark table-borderless text-center align-middle mb-0" style="background: transparent; font-size: 13px;">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--tj-border); color: rgba(255,255,255,0.6); font-size: 11px; letter-spacing: 1px;">
                                    <th class="py-3">SIZE</th>
                                    <th class="py-3">US SIZE</th>
                                    <th class="py-3">BUST</th>
                                    <th class="py-3">WAIST</th>
                                    <th class="py-3">HIPS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">XS</td>
                                    <td class="py-3 text-white-50">0 - 2</td>
                                    <td class="py-3 unit-val" data-cm="82-85 cm" data-inch="32.2-33.4 in">82-85 cm</td>
                                    <td class="py-3 unit-val" data-cm="62-65 cm" data-inch="24.4-25.5 in">62-65 cm</td>
                                    <td class="py-3 unit-val" data-cm="88-91 cm" data-inch="34.6-35.8 in">88-91 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">S</td>
                                    <td class="py-3 text-white-50">4 - 6</td>
                                    <td class="py-3 unit-val" data-cm="86-89 cm" data-inch="33.8-35.0 in">86-89 cm</td>
                                    <td class="py-3 unit-val" data-cm="66-69 cm" data-inch="25.9-27.1 in">66-69 cm</td>
                                    <td class="py-3 unit-val" data-cm="92-95 cm" data-inch="36.2-37.4 in">92-95 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">M</td>
                                    <td class="py-3 text-white-50">8 - 10</td>
                                    <td class="py-3 unit-val" data-cm="90-93 cm" data-inch="35.4-36.6 in">90-93 cm</td>
                                    <td class="py-3 unit-val" data-cm="70-73 cm" data-inch="27.5-28.7 in">70-73 cm</td>
                                    <td class="py-3 unit-val" data-cm="96-99 cm" data-inch="37.7-38.9 in">96-99 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">L</td>
                                    <td class="py-3 text-white-50">12 - 14</td>
                                    <td class="py-3 unit-val" data-cm="94-99 cm" data-inch="37.0-38.9 in">94-99 cm</td>
                                    <td class="py-3 unit-val" data-cm="74-79 cm" data-inch="29.1-31.1 in">74-79 cm</td>
                                    <td class="py-3 unit-val" data-cm="100-104 cm" data-inch="39.3-40.9 in">100-104 cm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold py-3 text-warning">XL</td>
                                    <td class="py-3 text-white-50">16</td>
                                    <td class="py-3 unit-val" data-cm="100-105 cm" data-inch="39.3-41.3 in">100-105 cm</td>
                                    <td class="py-3 unit-val" data-cm="80-85 cm" data-inch="31.4-33.4 in">80-85 cm</td>
                                    <td class="py-3 unit-val" data-cm="105-110 cm" data-inch="41.3-43.3 in">105-110 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 2. Men's Table (Hidden by default) -->
                    <div class="sizing-table-content d-none" id="mens-table">
                        <table class="table table-dark table-borderless text-center align-middle mb-0" style="background: transparent; font-size: 13px;">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--tj-border); color: rgba(255,255,255,0.6); font-size: 11px; letter-spacing: 1px;">
                                    <th class="py-3">SIZE</th>
                                    <th class="py-3">CHEST</th>
                                    <th class="py-3">WAIST</th>
                                    <th class="py-3">NECK</th>
                                    <th class="py-3">SLEEVE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">S</td>
                                    <td class="py-3 unit-val" data-cm="86-91 cm" data-inch="34-36 in">86-91 cm</td>
                                    <td class="py-3 unit-val" data-cm="71-76 cm" data-inch="28-30 in">71-76 cm</td>
                                    <td class="py-3 unit-val" data-cm="36-37 cm" data-inch="14-14.5 in">36-37 cm</td>
                                    <td class="py-3 unit-val" data-cm="81 cm" data-inch="32 in">81 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">M</td>
                                    <td class="py-3 unit-val" data-cm="96-101 cm" data-inch="38-40 in">96-101 cm</td>
                                    <td class="py-3 unit-val" data-cm="81-86 cm" data-inch="32-34 in">81-86 cm</td>
                                    <td class="py-3 unit-val" data-cm="38-39 cm" data-inch="15-15.5 in">38-39 cm</td>
                                    <td class="py-3 unit-val" data-cm="84 cm" data-inch="33 in">84 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">L</td>
                                    <td class="py-3 unit-val" data-cm="106-111 cm" data-inch="42-44 in">106-111 cm</td>
                                    <td class="py-3 unit-val" data-cm="91-96 cm" data-inch="36-38 in">91-96 cm</td>
                                    <td class="py-3 unit-val" data-cm="40-41 cm" data-inch="16-16.5 in">40-41 cm</td>
                                    <td class="py-3 unit-val" data-cm="86 cm" data-inch="34 in">86 cm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold py-3 text-warning">XL</td>
                                    <td class="py-3 unit-val" data-cm="116-121 cm" data-inch="46-48 in">116-121 cm</td>
                                    <td class="py-3 unit-val" data-cm="101-106 cm" data-inch="40-42 in">101-106 cm</td>
                                    <td class="py-3 unit-val" data-cm="42-43 cm" data-inch="17-17.5 in">42-43 cm</td>
                                    <td class="py-3 unit-val" data-cm="88 cm" data-inch="35 in">88 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 3. Kids' Table (Hidden by default) -->
                    <div class="sizing-table-content d-none" id="kids-table">
                        <table class="table table-dark table-borderless text-center align-middle mb-0" style="background: transparent; font-size: 13px;">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--tj-border); color: rgba(255,255,255,0.6); font-size: 11px; letter-spacing: 1px;">
                                    <th class="py-3">AGE / SIZE</th>
                                    <th class="py-3">HEIGHT</th>
                                    <th class="py-3">CHEST</th>
                                    <th class="py-3">WAIST</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">3 - 4 Years</td>
                                    <td class="py-3 unit-val" data-cm="98-104 cm" data-inch="38-41 in">98-104 cm</td>
                                    <td class="py-3 unit-val" data-cm="55-57 cm" data-inch="21-22 in">55-57 cm</td>
                                    <td class="py-3 unit-val" data-cm="52-54 cm" data-inch="20-21 in">52-54 cm</td>
                                </tr>
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.04);">
                                    <td class="fw-bold py-3 text-warning">5 - 6 Years</td>
                                    <td class="py-3 unit-val" data-cm="110-116 cm" data-inch="43-45 in">110-116 cm</td>
                                    <td class="py-3 unit-val" data-cm="59-61 cm" data-inch="23-24 in">59-61 cm</td>
                                    <td class="py-3 unit-val" data-cm="55-57 cm" data-inch="21-22 in">55-57 cm</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold py-3 text-warning">7 - 8 Years</td>
                                    <td class="py-3 unit-val" data-cm="122-128 cm" data-inch="48-50 in">122-128 cm</td>
                                    <td class="py-3 unit-val" data-cm="63-67 cm" data-inch="25-26 in">63-67 cm</td>
                                    <td class="py-3 unit-val" data-cm="58-60 cm" data-inch="23-23.5 in">58-60 cm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer border-top border-secondary px-4 py-3" style="border-color: var(--tj-border) !important;">
                <button type="button" class="btn btn-sm px-4 rounded-pill text-white" style="background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink)); border: none;" data-bs-dismiss="modal">Close Chart</button>
            </div>

        </div>
    </div>
</div>

<script>
// Switch between Women's, Men's, and Kids' sizing tables
function switchSizingCategory(category, btnElement) {
    // Hide all tables
    document.querySelectorAll('.sizing-table-content').forEach(el => {
        el.classList.add('d-none');
    });
    
    // Show selected table
    document.getElementById(category + '-table').classList.remove('d-none');

    // Update active tab buttons styling
    document.querySelectorAll('.size-tab-btn').forEach(btn => {
        btn.style.background = 'rgba(255,255,255,0.03)';
        btn.style.border = '1px solid var(--tj-border)';
        btn.style.boxShadow = 'none';
    });
    
    btnElement.style.background = 'linear-gradient(135deg, var(--tj-purple), var(--tj-pink))';
    btnElement.style.border = 'none';
    btnElement.style.boxShadow = '0 4px 15px rgba(233,54,167,0.4)';
}

// Switch units between CM and Inches dynamically
function switchUnit(unitType) {
    const cmBtn = document.getElementById('cmBtn');
    const inchBtn = document.getElementById('inchBtn');

    if(unitType === 'cm') {
        cmBtn.style.background = 'var(--tj-purple)';
        inchBtn.style.background = 'rgba(255,255,255,0.03)';
    } else {
        inchBtn.style.background = 'var(--tj-purple)';
        cmBtn.style.background = 'rgba(255,255,255,0.03)';
    }

    // Update table cell values based on data attributes
    document.querySelectorAll('.unit-val').forEach(cell => {
        if(unitType === 'inch' || unitType === 'inches') {
            cell.innerText = cell.getAttribute('data-inch');
        } else {
            cell.innerText = cell.getAttribute('data-cm');
        }
    });
}
</script>