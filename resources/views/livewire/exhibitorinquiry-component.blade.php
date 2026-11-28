<form method="POST" action="#" class="mt-8 space-y-6">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Contact Person Name *</label>
            <input type="text" name="name" placeholder="Enter your full name" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
        </div>
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Gifting Brand / Studio Name *</label>
            <input type="text" name="company" placeholder="Your gifting, hamper, or silverware brand" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
        </div>
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Phone / WhatsApp *</label>
            <input type="tel" name="phone" placeholder="+91 999-185-6776" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Business Email *</label>
            <input type="email" name="email" placeholder="you@brand.com" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]" required />
        </div>
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Gifting / Product Category *</label>
            <select name="category" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                <option value="Luxury Gift Hampers & Trousseau Packaging">Luxury Gift Hampers & Trousseau Packaging</option>
                <option value="Silverware, Brassware & Heritage Artifacts">Silverware, Brassware & Heritage Artifacts</option>
                <option value="Artisanal Mithai, Chocolates & Dry-Fruit Chests">Artisanal Mithai, Chocolates & Dry-Fruit Chests</option>
                <option value="Perfumes, Candles & Luxury Wellness Favors">Perfumes, Candles & Luxury Wellness Favors</option>
                <option value="Bespoke Invitations, Keepsakes & Return Favors">Bespoke Invitations, Keepsakes & Return Favors</option>
                <option value="Corporate & Hospitality Gifting Manufacturer">Corporate & Hospitality Gifting Manufacturer</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">Preferred Space Option *</label>
            <select name="booth_size" class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm font-medium focus:outline-none focus:border-[#FF5500]">
                <option value="Turnkey Booth (Starting ₹65,000)">Turnkey Booth (Starting ₹65,000)</option>
                <option value="15 sqm Two-Side Open Showcase Booth">15 sqm Two-Side Open Showcase Booth</option>
                <option value="24 sqm Corner Hamper Gallery">24 sqm Corner Hamper Gallery</option>
                <option value="36 sqm Founding Partner + 9 sqm Free Next Year">36 sqm Founding Partner + 9 sqm Free Next Year</option>
                <option value="Send Floorplan & Brochure First">Send Floorplan & Brochure First</option>
            </select>
        </div>
    </div>

    <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-neutral-700 mb-2">
            City, Product Range Or Official VIP Hamper Partner Interest
        </label>
        <textarea rows="3" name="notes" placeholder="Share your city, signature gift collections, minimum order quantities, or interest in sponsoring official VIP/Speaker welcome hampers..." class="w-full bg-neutral-100 border border-black/15 px-4 py-3 text-sm focus:outline-none focus:border-[#FF5500]"></textarea>
    </div>

    <div class="pt-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-t border-black/10">
        <span class="text-xs text-neutral-600">
            05 – 07 March 2027 • Yashobhoomi (IICC), Dwarka, New Delhi • team@weddingindiaexpo.com
        </span>
        <button type="submit" class="inline-flex items-center justify-center gap-3 bg-[#111111] hover:bg-[#FF5500] text-white px-8 py-4 text-xs sm:text-sm font-bold uppercase tracking-wider transition-colors duration-300 cursor-pointer">
            <span>Request Stall Availability & Floorplan →</span>
        </button>
    </div>
</form>