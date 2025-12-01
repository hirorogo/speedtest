# コーディング規約 - Coding Style Guidelines

## 共通規則
- 絵文字の使用禁止（コード内、コメント内、回答内すべて）
- クラス、関数、コンポーネントごとにコメント文を記述
- 日本語でコメント文を記述
- 変数名、関数名は英語で記述

## Python規約
- インデント: スペース4つ
- PEP8準拠
- 型ヒントの使用を推奨
- docstringの記述
- snake_case命名規則

## JavaScript/TypeScript規約
- **言語選択**: やむを得ない事情がない限りJavaScriptを優先使用
- TypeScriptは型安全性が特に重要な場合のみ使用
- インデント: スペース2つ
- セミコロン必須
- ESLint + Prettier使用
- JSDocコメントの記述
- camelCase命名規則

## React開発規約
- **スタイリング**: CSS Modulesを優先使用
- ファイル命名: `ComponentName.module.css`
- グローバルスタイルは最小限に抑制
- styled-componentsやEmotion等は特別な理由がある場合のみ使用

## その他言語
- 各言語の標準的な規約に従う
- 一貫性のあるスタイルを維持
- チーム開発を意識したコード品質
# 基本設定 - Base Configuration

## 開発者情報
- ユーザーネーム: hiro
- GitHub名: hirorogo
- 開発環境: M2MacBook
- デフォルトシェル: zsh

## 共通設定
- 文字エンコーディング: UTF-8
- 国際化: 日本語 (ja) デフォルト
- プロジェクト保存場所: /Users/hiro/Documents/

## ウェブ開発共通設定
- デプロイ先: GitHub Pages（基本）
- CI/CD: GitHub Actions
- デザイン制約: グラデーション使用禁止

## ファイル管理
- .historyファイル: 許可
- .DS_Storeファイル: 許可
- 絶対パスでの記述を推奨
