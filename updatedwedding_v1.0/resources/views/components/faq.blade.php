<div class="row">
    <div class="col-7">
            <style>
                .custom-accordion {
                    width: 100%;
                }

                .accordion-item-custom {
                    border-bottom: 1px solid #ddd;
                    padding: 12px 0;
                }

                .accordion-title {
                    width: 100%;
                    background: none;
                    border: none;
                    text-align: left;
                    font-size: 16px;
                    font-weight: 600;
                    cursor: pointer;
                    padding: 10px 0;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .accordion-content {
                    display: none;
                    padding: 10px 0;
                    color: #555;
                    font-size: 14px;
                }

                .accordion-item-custom.active .accordion-content {
                    display: block;
                }

                .icon {
                    transition: 0.3s;
                }

                .accordion-item-custom.active .icon {
                    transform: rotate(180deg);
                }

                .icon {
                width: 8px;
                height: 8px;
                border-right: 2px solid #333;
                border-bottom: 2px solid #333;
                transform: rotate(45deg);
                transition: 0.3s;
                }

                .accordion-item-custom.active .icon {
                    transform: rotate(225deg);
                }
            </style>

            <div class="custom-accordion pr-4">

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Benefits As an Exhibitor
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Showcase your brand at  <span class="strong">Wedding India Expo 2026</span> and connect directly with serious buyers, wedding planners, and high-value customers.

                        Gain strong brand visibility, generate quality leads, and build valuable business connections in a premium exhibition environment.

                        This is your opportunity to  <strong>increase sales, expand reach, and grow your business faster</strong> in the wedding industry.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Exhibitor Application
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Join the Wedding India Expo 2026 by submitting your exhibitor application and become part of a premium wedding business platform.

                        Fill out the form to showcase your brand, select your stall space, and connect with thousands of potential clients and industry professionals.

                        Secure your participation early to ensure maximum visibility and the best placement at the expo.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Individual Exhibitor Application
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Apply as an individual exhibitor at Wedding India Expo 2026 and showcase your personal talent, services, or creative work to a wide audience.

                        This category is ideal for freelancers, independent professionals, and small entrepreneurs looking to gain exposure, attract clients, and grow their brand presence.

                        Fill out the application form to participate and connect directly with potential customers and industry partners.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Request Free Stand
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Submit your request to explore free or promotional exhibition space at Wedding India Expo 2026. This option is designed for emerging brands, startups, and selected partners looking to showcase their presence and gain exposure at a leading wedding industry platform. Fill out the form with your details, and our team will review your request and get back to you with available opportunities.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        New Product Showcase
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Introduce your latest products at Wedding India Expo 2026 and present your innovations directly to a highly targeted wedding industry audience.

                        This section is ideal for brands launching new collections, services, or exclusive offerings and looking to create strong market impact.

                        Gain instant attention, attract potential buyers, and build early interest by showcasing your new products in a premium exhibition environment.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Sponsorship Plan
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Become a sponsor at Wedding India Expo 2026 and position your brand at the center of one of the most premium wedding industry events.

                        Sponsorship gives your business maximum visibility through on-ground branding, digital promotions, and direct engagement with high-value exhibitors and visitors.

                        It’s a powerful opportunity to strengthen brand awareness, build trust, and connect with a highly targeted audience.
                    </div>
                </div>

            </div>

            <script>

                function toggleAccordion(btn) {
                    const item = btn.parentElement;
                    item.classList.toggle("active");
                }
            </script>
    </div>

    <div class="col-3"></div>
</div>