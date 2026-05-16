# 品質チェックリスト

## トップページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/5||
|3|横スクロールしないこと|OK|2026/5/5||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/5||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/5||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/5||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/5||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/5||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/5||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/5||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/5||
|16|ファビコンが適切に表示されていること|OK|2026/5/5||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/5|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/5||
||- iPad（768 × 1024）|OK|2026/5/5||
||- iPad Pro（834 × 1112）|OK|2026/5/5||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/5||
||- iPhone XR（414 × 896）|OK|2026/5/5||
||- Laptop1（1440 × 900）|OK|2026/5/5||
||- Laptop2（1920 × 1080）|OK|2026/5/5||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/5||
||- Windows / Firefox|OK|2026/5/5||
||- Windows / Microsoft Edge|OK|2026/5/5||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/5||
||- iOS / Chrome|OK|2026/5/13||
||- iOS / Firefox|OK|2026/5/13||
||- iOS / Safari|OK|2026/5/13||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Aboutページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/5||
|3|横スクロールしないこと|OK|2026/5/5||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/5||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/5||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/5||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/5||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/5||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/5||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/5||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/5||
|16|ファビコンが適切に表示されていること|OK|2026/5/5||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/5|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/5||
||- iPad（768 × 1024）|OK|2026/5/5||
||- iPad Pro（834 × 1112）|OK|2026/5/5||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/5||
||- iPhone XR（414 × 896）|OK|2026/5/5||
||- Laptop1（1440 × 900）|OK|2026/5/5||
||- Laptop2（1920 × 1080）|OK|2026/5/5||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/5||
||- Windows / Firefox|OK|2026/5/5||
||- Windows / Microsoft Edge|OK|2026/5/5||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/5||
||- iOS / Chrome|OK|2026/5/5||
||- iOS / Firefox|OK|2026/5/5||
||- iOS / Safari|OK|2026/5/5||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Serviceページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/5||
|3|横スクロールしないこと|OK|2026/5/5||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/5||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/5||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/5||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/5||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/5||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/5||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/5||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/5||
|16|ファビコンが適切に表示されていること|OK|2026/5/5||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/5|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/5||
||- iPad（768 × 1024）|OK|2026/5/5||
||- iPad Pro（834 × 1112）|OK|2026/5/5||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/5||
||- iPhone XR（414 × 896）|OK|2026/5/5||
||- Laptop1（1440 × 900）|OK|2026/5/5||
||- Laptop2（1920 × 1080）|OK|2026/5/5||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/5||
||- Windows / Firefox|OK|2026/5/5||
||- Windows / Microsoft Edge|OK|2026/5/5||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/5||
||- iOS / Chrome|OK|2026/5/5||
||- iOS / Firefox|OK|2026/5/5||
||- iOS / Safari|OK|2026/5/5||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Worksページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/5||
|3|横スクロールしないこと|OK|2026/5/5||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/5||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/5||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/5||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/5||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/5||
|10|ページ内外リンクが適切に動作すること|OK|2025/5/5||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/5||
|15|ページネーションが適切に動作すること|OK|2026/5/5||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/13||
|17|ファビコンが適切に表示されていること|OK|2026/5/5||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/5|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/5||
||- iPad（768 × 1024）|OK|2026/5/5||
||- iPad Pro（834 × 1112）|OK|2026/5/5||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/5||
||- iPhone XR（414 × 896）|OK|2026/5/5||
||- Laptop1（1440 × 900）|OK|2026/5/5||
||- Laptop2（1920 × 1080）|OK|2026/5/5||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/5||
||- Windows / Firefox|OK|2026/5/5||
||- Windows / Microsoft Edge|OK|2026/5/5||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/5||
||- iOS / Chrome|OK|2026/5/5||
||- iOS / Firefox|OK|2026/5/5||
||- iOS / Safari|OK|2026/5/5||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Works詳細ページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/9||
|3|横スクロールしないこと|OK|2026/5/9||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/9||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/9||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/9||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/9||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/9||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/9||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/9||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/9||
|16|ファビコンが適切に表示されていること|OK|2026/5/9||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/9|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/9||
||- iPad（768 × 1024）|OK|2026/5/9||
||- iPad Pro（834 × 1112）|OK|2026/5/9||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/9||
||- iPhone XR（414 × 896）|OK|2026/5/9||
||- Laptop1（1440 × 900）|OK|2026/5/9||
||- Laptop2（1920 × 1080）|OK|2026/5/9||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/9||
||- Windows / Firefox|OK|2026/5/9||
||- Windows / Microsoft Edge|OK|2026/5/9||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/9||
||- iOS / Chrome|OK|2026/5/9||
||- iOS / Firefox|OK|2026/5/9||
||- iOS / Safari|OK|2026/5/9||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Newsページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/9||
|3|横スクロールしないこと|OK|2026/5/9||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/9||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/9||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/9||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/9||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/9||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/9||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/9||
|15|ページネーションが適切に動作すること|OK|2026/5/9||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/9||
|17|ファビコンが適切に表示されていること|OK|2026/5/9||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/9|WordPressが自動出力するHTMLコードのエラーおよびワーニングは許容する。|
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/9||
||- iPad（768 × 1024）|OK|2026/5/9||
||- iPad Pro（834 × 1112）|OK|2026/5/9||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/9||
||- iPhone XR（414 × 896）|OK|2026/5/9||
||- Laptop1（1440 × 900）|OK|2026/5/9||
||- Laptop2（1920 × 1080）|OK|2026/5/9||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/9||
||- Windows / Firefox|OK|2026/5/9||
||- Windows / Microsoft Edge|OK|2026/5/9||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/9||
||- iOS / Chrome|OK|2026/5/9||
||- iOS / Firefox|OK|2026/5/9||
||- iOS / Safari|OK|2026/5/9||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## News詳細ページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/10||
|3|横スクロールしないこと|OK|2026/5/10||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/10||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/10||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/15||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/10||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/10||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/10||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/10||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/10||
|16|ファビコンが適切に表示されていること|OK|2026/5/10||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/10||
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/10||
||- iPad（768 × 1024）|OK|2026/5/10||
||- iPad Pro（834 × 1112）|OK|2026/5/10||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/10||
||- iPhone XR（414 × 896）|OK|2026/5/10||
||- Laptop1（1440 × 900）|OK|2026/5/10||
||- Laptop2（1920 × 1080）|OK|2026/5/10||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/10||
||- Windows / Firefox|OK|2026/5/10||
||- Windows / Microsoft Edge|OK|2026/5/10||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/10||
||- iOS / Chrome|OK|2026/5/10||
||- iOS / Firefox|OK|2026/5/10||
||- iOS / Safari|OK|2026/5/10||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Contactページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/10||
|3|横スクロールしないこと|OK|2026/5/10||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/10||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/10||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/10||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/10||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/10||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/10||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|OK|2026/5/10||
|13|フォームの入力内容が確認画面に適切に反映されること|OK|2026/5/10||
|14|フォームの入力内容が適切に送信されること|OK|2026/5/10||
|15|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/10||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/10||
|17|ファビコンが適切に表示されていること|OK|2026/5/10||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/10||
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/10||
||- iPad（768 × 1024）|OK|2026/5/10||
||- iPad Pro（834 × 1112）|OK|2026/5/10||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/10||
||- iPhone XR（414 × 896）|OK|2026/5/10||
||- Laptop1（1440 × 900）|OK|2026/5/10||
||- Laptop2（1920 × 1080）|OK|2026/5/10||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/10||
||- Windows / Firefox|OK|2026/5/10||
||- Windows / Microsoft Edge|OK|2026/5/10||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/10||
||- iOS / Chrome|OK|2026/5/10||
||- iOS / Firefox|OK|2026/5/10||
||- iOS / Safari|OK|2026/5/10||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## Completeページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/10||
|3|横スクロールしないこと|OK|2026/5/10||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/12||
|5|フォントの色が適切であること（`color`）|OK|2026/5/10||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/10||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/10||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/10||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/10||
|10|ページ内外リンクが適切に動作すること|OK|2026/5/10||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/10||
|15|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/10||
|16|ファビコンが適切に表示されていること|OK|2026/5/10||
|17|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|18|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/13||
|19|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/10||
||- iPad（768 × 1024）|OK|2026/5/10||
||- iPad Pro（834 × 1112）|OK|2026/5/10||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/10||
||- iPhone XR（414 × 896）|OK|2026/5/10||
||- Laptop1（1440 × 900）|OK|2026/5/10||
||- Laptop2（1920 × 1080）|OK|2026/5/10||
|20|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/10||
||- Windows / Firefox|OK|2026/5/10||
||- Windows / Microsoft Edge|OK|2026/5/10||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/10||
||- iOS / Chrome|OK|2026/5/10||
||- iOS / Firefox|OK|2026/5/10||
||- iOS / Safari|OK|2026/5/10||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|

## 404ページ
| No. | チェック項目 | 結果 | 日付 | コメント |
|:---:|:---|:---:|:---:|:---|
|1|デザインカンプとの表示ずれが無いこと<br><small>※ Chrome拡張機能Perfect Pixelで確認</small>|N/A|N/A||
|2|500KBを超えるリソースが無いこと<br><small>※1 検証ツールのNetworkタブで確認</small><br><small>※2 PC/SPそれぞれで確認（画像出し分けを考慮）</small>|OK|2026/5/11||
|3|横スクロールしないこと|OK|2026/5/11||
|4|フォントが合っていること（`font-family`）<br><small>※ 検証ツールの[要素]-[計算済み]-[レンダリングフォント]で確認</small>|OK|2026/5/11||
|5|フォントの色が適切であること（`color`）|OK|2026/5/11||
|6|フォントサイズが適切であること（`font-size`）|OK|2026/5/11||
|7|文章の行間が適切であること（`line-height`）|OK|2026/5/11||
|8|余白が適切であること（`margin`/`padding`）|OK|2026/5/11||
|9|Consoleエラーが発生していないこと<br><small>※ シークレットブラウザで確認すること（拡張機能のJSエラーを拾わないようにするため）</small>|OK|2026/5/11|404エラー以外は発生していない。|
|10|ページ内外リンクが適切に動作すること|OK|2026/5/11||
|11|Tabキー操作でフォーカス中の要素が分かりやすく表示されること|OK|2026/5/16||
|12|フォームの必須項目がすべて入力されるまで送信できないこと|N/A|N/A|フォームが無いため|
|13|フォームの入力内容が適切に送信されること|N/A|N/A|フォームが無いため|
|14|ハンバーガーメニューが見切れた時に縦スクロールできること|OK|2026/5/11||
|15|3秒後にトップページに遷移すること|OK|2026/5/11||
|16|`Title`と`Meta Description`が設定されていること<br><small>※ デスクトップアプリScreamingfrogにURLを入力して確認すること</small>|OK|2026/5/11||
|17|ファビコンが適切に表示されていること|OK|2026/5/11||
|18|OGPが適切に設定されていること|N/A|N/A|OGPを設定していないため|
|19|HTML/CSSでコーディングエラーが発生しないこと<br><small>※ The W3C Markup Validation Serviceを使用すること</small>|OK|2026/5/11||
|20|レスポンシブチェック<br><small>※ Chrome拡張機能Responsive Viewerで確認</small>||||
||- Medium Screen（1024 × 800）|OK|2026/5/11||
||- iPad（768 × 1024）|OK|2026/5/11||
||- iPad Pro（834 × 1112）|OK|2026/5/11||
||- iPhone 6.7.8（375 × 667）|OK|2026/5/11||
||- iPhone XR（414 × 896）|OK|2026/5/11||
||- Laptop1（1440 × 900）|OK|2026/5/11||
||- Laptop2（1920 × 1080）|OK|2026/5/11||
|21|クロスブラウザチェック||||
||- macOS / Chrome|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Firefox|N/A|N/A|MacBookを入手でき次第、確認予定|
||- macOS / Safari|N/A|N/A|MacBookを入手でき次第、確認予定|
||- Windows / Chrome|OK|2026/5/11||
||- Windows / Firefox|OK|2026/5/11||
||- Windows / Microsoft Edge|OK|2026/5/11||
||- Windows / Safari（Playwrightで確認）|OK|2026/5/11||
||- iOS / Chrome|OK|2026/5/11||
||- iOS / Firefox|OK|2026/5/11||
||- iOS / Safari|OK|2026/5/11||
||- Android / Chrome|N/A|N/A|Android端末を入手でき次第、確認予定|
