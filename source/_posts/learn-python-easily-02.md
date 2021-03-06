---
extends: _layouts.post
title: সহজে পাইথন শেখা-০২
date: '2012-06-05'
gist: সহজ ভাষায় পাইথন শেখার টিউটোরিয়াল। (দ্বিতীয় পর্ব)
section: content
syntaxHighlight: true
categories: []
---

আগের পর্বে আমি পাইথন নিয়ে প্রাথমিক কিছু আলোচনা করেছিলাম। এই পর্বে আমরা দেখবো কিভাবে আমরা আমাদের পিসিকে পাইথনে কোড করার উপযোগী করতে পারি।

প্রথমেই পাইথনের ওয়েব সাইট (<http://www.python.org>) থেকে পাইথন ডাউনলোড করতে হবে। সেথানে পাইথনের দুইটা ভার্সনের নাম দেয়া আছে। একটা ২.৭.৩ অন্যটা ৩.২.৩। এর মধ্য থেকে আমরা ২.৭.৩ ব্যবহার করব। প্রশ্ন উঠতে পারে, কেন আমরা নতুন ভার্সন থাকতে পুরাতন ভার্সন ব্যবহার করব। এর উত্তর হচ্ছে পাইথনের কোডিং স্টাইলে ভার্সন ৩ থেকে বেশ কিছু পরিবর্তন এসেছে যা আগের ভার্সনের সাথে কনফ্লিক্ট করে। আর পাইথনের যে সকল ফ্রেমওয়ার্ক আছে, তার অধিকাংশই এখন পর্যন্ত পাইথন ৩ সাপোর্ট করে না। তাই আমরা পাইথন ২.৭ ই শিখবো। একবার শিখে ফেললে ভবিষ্যতে প্রয়োজনবোধে নিজেদেরকে পাইথনের নতুন ভার্সনে আপডেট করে নিতে মনে হয় না আমাদের খুব একটা কষ্ট হবে।

এখন কথা হচ্ছে আমরা কোন অপারেটিং সিস্টেমে পাইথনের কোড করবো। আমার জানামতে উইন্ডোজই পৃথিবীর একমাত্র ওএস যেখানে বিল্ট ইন পাইথন সাপোর্ট নেই। যাই হোক আমি যদি উইন্ডোজ ব্যবহারকারী হই তাহলে প্রথমেই আমি পাইথনের ওয়েব সাইট থেকে পাইথনের ২.৭.৩ ভার্সনের এক্সিকিউটেবল ফাইল ডাউনলোড করে নিব। এই এক্সিকিউটেবল ইনস্টল করলে দেখবো আইডিএলই নামে একটা এডিটর সেটআপ হয়েছে। এই আইডিএলই ব্যবহার করেই আমরা কোড করবো। এছাড়া কেউ চাইলে নোটপ্যাড++ ব্যবহার করতে পারেন।

আপনি লিনাক্স মিন্ট বা উবুন্টু ব্যবহারকারী হয়ে থাকলে আপনার টার্মিনাল ওপেন করে লিখুন-

```
python
```

তাহলেই আপনি কোড লিখতে পারবেন। আইডিএলই ইনস্টল দিতে লিখুন-

```
sudo apt-get install idle
```

এবার আপনার পিসিতে পাইথন ঠিকভাবে ইনস্টল হয়েছে কিনা দেখতে চাইলে টার্মিনাল ওপেন করে লিখুন python তারপর এন্টার দিন। যদি দেখেন টার্মিনালে নিচের লেখাটুকু এসেছে তাহলে বুঝবেন আপনার পাইথন সেটআপ করা ঠিক আছে।

```
Python 2.7.3 (r266:84292, Sep 15 2010, 15:52:39)
[GCC 4.4.5] on linux2
Type "help", "copyright", "credits" or "license" for more information.
```

বিভিন্ন পিসিতে এই লেখাটুকু ভিন্ন রকম হতে পারে।

ব্যস আপনার পিসি এখন পাইথনে কোড করার উপযোগী।
