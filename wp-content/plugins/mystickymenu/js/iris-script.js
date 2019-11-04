jQuery(document).ready(function($){
    jQuery('.my-color-field').wpColorPicker();
    jQuery(".sticky-header-menu ul li a").click(function(e){
        e.preventDefault();
        if(!jQuery(this).hasClass("active")) {
           jQuery(".sticky-header-menu ul li a").removeClass("active");
           jQuery(this).addClass("active");
           thisHref = jQuery(this).attr("href");
           jQuery(".sticky-header-content").hide();
           jQuery(thisHref).show();
        }
    });
    jQuery(document).on('click', '.sticky-header-upgrade-now', function(e){
        e.preventDefault();
        jQuery(".sticky-header-menu ul li a:last").trigger("click");
    });
    jQuery(".multiple-options").change(function(){
        thisValue = jQuery(this).val();
        jQuery(this).closest(".rpt_plan").find("a.rpt_foot").attr("href", thisValue);
        thisPrice = jQuery(this).find("option:selected").attr("data-price");
        jQuery(this).closest(".rpt_plan").find(".rpt_price").text("$"+thisPrice);
        priceText = jQuery(this).find("option:selected").attr("data-header");
        jQuery(this).closest(".rpt_plan").find(".rpt_desc").text(priceText);
    });
});