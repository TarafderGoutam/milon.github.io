---
extends: _layouts.post
title: লারাভেল অ্যাপ্লিকেশন থেকে আর্টিসান কমান্ড কল করা
date: '2014-12-28'
gist: লারাভেল অ্যাপ্লিকেশনের ভেতর থেকে আর্টিসান কমান্ড কল করার পদ্ধতি।
section: content
syntaxHighlight: true
categories: []
---

আমরা যারা লারাভেলের সাথে পরিচিত, তারা প্রায় সবাই জানি লারাভেল আর্টিসান নামের একটি কমান্ড লাইন ইউটিলিটি সহ এসেছে যেটা সিম্ফোনীর কনসোল কম্পোনেন্টের উপর ভিত্তি করে তৈরি করা। আমরা সবাই এটা ব্যবহার করি টার্মিনাল বা কনসোল থেকে। অনেকেই জানি না যে লারাভেল অ্যাপ্লিকেশন থেকেও এই আর্টিসান কমান্ড কল করা যায়। চলুন দেখি কিভাবে এটা করে।

ধরি আমরা নিচের কমান্ডটি অ্যাপ্লিকেশন থেকে কল করতে চাই-

```
artisan migrate --env=test --path=app/database/migrations/test
```

এটা আমরা অ্যাপ্লিকেশনের কোন মেথড থেকে এভাবে কল করতে পারি-

```
Artisan::call('migrate', [
    '--env' => 'test',
    '--path' => 'app/database/migrations/test'
]);
```
