<?
  /**
   * Copyright 2017 Google Inc. All Rights Reserved.
   * Licensed under the Apache License, Version 2.0 (the "License");
   * you may not use this file except in compliance with the License.
   * You may obtain a copy of the License at
   *     http://www.apache.org/licenses/LICENSE-2.0
   * Unless required by applicable law or agreed to in writing, software
   * distributed under the License is distributed on an "AS IS" BASIS,
   * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   * See the License for the specific language governing permissions and
   * limitations under the License.
   */
?>
<?
  $fragment = $_GET['fragment'] == 'true';

  if(!$fragment) get_template_part('header');
?>
<a href="<?=home_url();?>">Back</a>
<? if(have_posts()): ?>
  <? while(have_posts()): the_post() ?>
    <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
    <p><? the_date(); ?></p>
    <? the_content(); ?>
  <? endwhile; ?>
<? else: ?>
  Nothing here :(
<? endif; ?>
<?
  if(!$fragment) get_template_part('footer');
?>