{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
						{include file="$tpl_dir./layout/{$LEO_LAYOUT_DIRECTION}/footer.tpl"  }
                	</div>
				</div>
            </section>
<!-- Footer -->
			
            {if isset($HOOK_BOTTOM) && !empty($HOOK_BOTTOM) && in_array($page_name,array('index'))}
				<section id="bottom">
					<div class="container">
						{$HOOK_BOTTOM}
					</div>
				</section>
			{/if}
			<footer id="footer" class="footer-container">
                {if isset($HOOK_FOOTERTOP) && !empty($HOOK_FOOTERTOP)}
					<section id="leo-footer-top" class="footer-top"> 
						<div class="container"> 
							<div class="inner">			  
								{$HOOK_FOOTERTOP}  
							</div>
						</div> 
					</section><!-- #footertop -->
                {/if}
                <section id="leo-footer-center" class="footer-center">
					<div class="container"> 
						<div class="inner">			
							{$HOOK_FOOTER}
						</div> 
					</div>
				</section><!-- #footercenter -->
                {if isset($HOOK_FOOTERBOTTOM)&&!empty($HOOK_FOOTERBOTTOM)}
					<section id="leo-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">			
								{$HOOK_FOOTERBOTTOM}
							</div>
						</div>
					</section><!-- #footerbottom -->
                {/if}
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="row">
							<div id="powered" class="col-sm-12 col-md-12 col-xs-12">
								Desarrollado por Booming Up
							</div><!-- #poweredby -->
						</div>
					</div>
				</section>
				<section id="footernav-bottom">
					{if isset($HOOK_FOOTNAV)&&!empty($HOOK_FOOTNAV)}
						<div id="footnav" class="col-sm-12 col-md-12 col-xs-12">
							<div class="container">
								<div class="row">
									{$HOOK_FOOTNAV}
							  </div>
							</div>
						</div>
					{/if}
				</section>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
{/if}

<p id="back-top">
<a href="#top" title="{l s='Scroll To Top'}" alt="">{l s='Scroll To Top'}</a>
</p>

{include file="$tpl_dir./global.tpl"}
{if isset($LEO_PANELTOOL) && $LEO_PANELTOOL}
    {include file="$tpl_dir./info/paneltool.tpl"}
{/if}
	</body>
</html>