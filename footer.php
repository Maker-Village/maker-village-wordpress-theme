<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
	</div>
</div>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- 軒懷 -->
      
      <!--footer-->
      <footer id="footer" class="grey darken-3 scrollspy">
       
       <div class="container">
          <div class="row">
            
            <div class="col l4 m4 s12">
              <div class="fb-page" data-href="https://www.facebook.com/ccuMakerVillage/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ccuMakerVillage/"><a href="https://www.facebook.com/ccuMakerVillage/">Maker Village</a></blockquote></div></div>
            </div>
            <div class="col l4 m4 s12">
              <h5 class="white-text">聯絡資訊</h5>
              <ul class="grey-text text-lighten-4">
                <li>空間地點: 國立中正大學活動中心斜角巷3095(郵局旁)</li>
                <li>開放時間: 每周一與周五 19:30~21:30<li>
                <li>email: <a href="mailto:ccumakervillage@gmail.com">ccumakervillage@gmail.com</a></li>
              </ul>
            </div>
            <div class="col l4 m4 s12">
              <h5 class="white-text">相關連結</h5>
              <ul class="grey-text text-lighten-4">
                <li><a href="https://www.facebook.com/ccuMakerVillage" target="_blank">粉絲專頁</a></li>
                <li><a href="https://www.facebook.com/groups/639064532812552/" target="_blank">討論區</a></li>
                <li><a href="http://maker-village.tk/" target="_blank">部落格</a><li>
                <li><a href="https://github.com/Maker-Village" target="_blank"><i class="fa fa-github"> github</i></a><li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-copyright">
          <div class="container grey-text text-lighten-4"> 
            引用資源: jQuery materializecss<br />
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="創用 CC 授權條款" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br />本著作由<span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Maker Village</span>製作，以<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">創用CC 姓名標示-非商業性-相同方式分享 4.0 國際 授權條款</a>釋出。
          </div>
        </div>
      </footer>

<!-- 軒懷END -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
