<!-- =========================================
     TJ SIZE GUIDE MODAL COMPONENT
========================================= -->
<div class="modal fade" id="sizeGuideModal" tabindex="-1" aria-labelledby="sizeGuideModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: #11112b; border: 1px solid var(--tj-border); color: #fff; border-radius: 20px;">
            <div class="modal-header border-bottom border-secondary" style="border-color: var(--tj-border) !important;">
                <h5 class="modal-title fw-bold" id="sizeGuideModalLabel" style="color: #fff;">
                    <i class="fa-solid fa-ruler-combined me-2" style="color: var(--tj-pink);"></i> Size Guide & Measurements
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-white-50 mb-4" style="font-size: 13px;">
                    All measurements are provided in inches. Please use this chart as a general guide to find your correct size. If you are between sizes, we recommend ordering a size up.
                </p>

                <!-- Size Table -->
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered text-center align-middle" style="background: transparent; border-color: var(--tj-border); font-size: 13px;">
                        <thead>
                            <tr style="background: rgba(125, 53, 232, 0.2); color: #fff;">
                                <th style="border-color: var(--tj-border);">Size</th>
                                <th style="border-color: var(--tj-border);">Chest / Bust (in)</th>
                                <th style="border-color: var(--tj-border);">Waist (in)</th>
                                <th style="border-color: var(--tj-border);">Hips (in)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">XS</td>
                                <td style="border-color: var(--tj-border);">32 - 33</td>
                                <td style="border-color: var(--tj-border);">24 - 25</td>
                                <td style="border-color: var(--tj-border);">34 - 35</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">S</td>
                                <td style="border-color: var(--tj-border);">34 - 35</td>
                                <td style="border-color: var(--tj-border);">26 - 27</td>
                                <td style="border-color: var(--tj-border);">36 - 37</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">M</td>
                                <td style="border-color: var(--tj-border);">36 - 37</td>
                                <td style="border-color: var(--tj-border);">28 - 29</td>
                                <td style="border-color: var(--tj-border);">38 - 39</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">L</td>
                                <td style="border-color: var(--tj-border);">38 - 40</td>
                                <td style="border-color: var(--tj-border);">30 - 32</td>
                                <td style="border-color: var(--tj-border);">40 - 42</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">XL</td>
                                <td style="border-color: var(--tj-border);">41 - 43</td>
                                <td style="border-color: var(--tj-border);">33 - 35</td>
                                <td style="border-color: var(--tj-border);">43 - 45</td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="border-color: var(--tj-border); color: var(--tj-pink);">XXL</td>
                                <td style="border-color: var(--tj-border);">44 - 46</td>
                                <td style="border-color: var(--tj-border);">36 - 38</td>
                                <td style="border-color: var(--tj-border);">46 - 48</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Measuring Tips -->
                <div class="mt-4 p-3 rounded" style="background: rgba(255, 255, 255, 0.02); border: 1px solid var(--tj-border);">
                    <h6 class="fw-bold mb-2" style="font-size: 13px; color: #F8D05C;"><i class="fa-solid fa-lightbulb me-1"></i> Quick Measuring Tips:</h6>
                    <ul class="text-white-50 ps-3 mb-0" style="font-size: 12px; line-height: 1.6;">
                        <li><strong>Bust/Chest:</strong> Measure around the fullest part of your chest, keeping the tape horizontal.</li>
                        <li><strong>Waist:</strong> Measure around your natural waistline, keeping the tape comfortably loose.</li>
                        <li><strong>Hips:</strong> Stand with your heels together and measure around the fullest part of your hips.</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer border-top border-secondary" style="border-color: var(--tj-border) !important;">
                <button type="button" class="btn btn-sm px-4 rounded-pill text-white" style="background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink)); border: none;" data-bs-dismiss="modal">Got It</button>
            </div>
        </div>
    </div>
</div>