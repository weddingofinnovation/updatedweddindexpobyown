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
                        What is Wedding Expo India 2026?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Wedding Expo India 2026 is India’s first dedicated <strong>destination wedding expo</strong>, bringing together wedding planners, venues, and global destinations on one platform.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Where is the wedding exhibition in Delhi happening?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        The event will take place at Yashobhoomi – India International Convention and Expo Centre, one of the largest exhibition venues in India.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        When is the wedding expo in Delhi?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        The expo is scheduled for 7–8–9 August 2026.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Why should I visit a wedding expo in India?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Visiting a wedding expo helps you:
                        •	Meet top wedding planners in India 
                        •	Explore wedding venues in India 
                        •	Discover destination wedding ideas 
                        •	Compare services and packages 
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        Can I plan my destination wedding at this expo?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        Yes, this event is specially designed for Destination Wedding India planning, where you can meet planners, venues, and service providers.
                    </div>
                </div>

                <div class="accordion-item-custom">
                    <button class="accordion-title" onclick="toggleAccordion(this)">
                        What types of wedding venues will be available?
                        <span class="icon"></span>
                    </button>
                    <div class="accordion-content">
                        You can explore:
                        •	Luxury hotels and resorts 
                        •	Palace and heritage venues 
                        •	Beach wedding destinations 
                        •	International wedding locations 
                    </div>
                </div>

            </div>

            <script>
                function toggleAccordion(btn) 
                {
                    const item = btn.parentElement;
                    item.classList.toggle("active");
                }
            </script>
    </div>

    <div class="col-3"></div>
</div>