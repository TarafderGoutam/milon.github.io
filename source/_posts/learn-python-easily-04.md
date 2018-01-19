---
extends: _layouts.post
title: সহজে পাইথন শেখা-০৪
date: '2012-07-03'
gist: সহজ ভাষায় পাইথন শেখার টিউটোরিয়াল। (চতুর্থ পর্ব)
section: content
---

আজকে আমরা দেখবো পাইথনে কিভাবে হিসাব-নিকাশ করতে হয়। হিসাবের কথা আসলেই প্রথমে আমাদের মনে আসে যোগ-বিয়োগের কথা। পাইথনে যোগ, বিয়োগ, গুন ভাগ করা খুবই সহজ।

প্রথমেই আসে যোগের কথা। পাইথনে দুইটা সংখ্যা যোগ করতে হলে লিখতে হয়-

```
>>>2+8
10
>>>5+27
32
```

একইভাবে তিন, চার বা পাঁচটা সংখ্যাও যোগ করা যায়।

```
>>>2+9+7
18
```

বিয়োগ গুন বা ভাগও একই ভাবে করা যায়। যেমন-

```
>>>5-3
2
>>>5*4
20
>>>25/5
5
```

পাইথনে যোগ, বিয়োগ, গুন বা ভাগ করার জন্য যেসব নোটেশন ব্যবহার করা হয় তা হল-<br>

- যোগঃ `+`
- বিয়োগঃ `–`
- গুনঃ `*`
- ভাগঃ `/`

এখানে ভাগ করার সময় একটা জিনিস লক্ষ্য করি-

```
>>>10/3
3
>>>11/2
5
```

যদিও উপরের দুইটি ক্ষেত্রে আসা উচিৎ ছিল-

```
3.33333333
5.5
```

আসলে শুধু পাইথনে না, যে কোন প্রোগ্রামিং ল্যাংগুয়েজেই ভাগ করার সময় এভাবে নিঃশেষে বিভাগ্য অংশটুকু রেখে বাকি অংশটা নিয়ে কাজ করা হয়। আমরা যদি আসল উত্তরটা পেতে চাই তাহলে আমাদের যেটা করতে হবে সেটাকে প্রোগ্রামিং ল্যাংগুয়েজের ভাষায় বলা হয় কাস্টিং। অন্যান্য ল্যাংগুরয়েজের চেয়ে এ জায়গাতেও পাইথন অনেক সহজ। যেমন-

```
>>>10.0/2
3.33333333
>>>10/3.0
3.33333333
```

যেখানে C, C++ বা Java তে কাস্টিং করার নিয়ম-

```
(float)10/3     or
(double)10/3
```

এবার আর একটা মজার জিনিস শিখি। আমাদের যে সবসময় ভাগফলই লাগবে তা কিন্তু না। আমাদের অনেকসময় ভাগশেষও বের করার দরকার পড়তে পারে। এর জন্য আমরা যে অপারেটর ব্যবহার করবো সেটাকে বলে মডুলাস। যেমন-

```
>>>10%3
1
>>>17%5
2
```

এটা প্রকাশ করা হয় % চিহ্ন দ্বারা।

এবার আমরা দেখবো, কিভাবে এক্সপোনেনশিয়াল বা ঘাত বের করতে হয়। যেমন ২^৪ মান বের করবো। এর জন্য লিখতে হবে-

```
>>>2**3
8
>>>4**5
1024
```

এক্সপোনেনশিয়াল বের করার জন্য আমরা ব্যবহার করবো জোড়া এস্টেরিক্স(`**`)।

আজকে আমরা যতগুলো অপারেটর দেখলাম তার সবই বাইনারী অপারেটর, অর্থাৎ এগুলো নিয়ে কাজ করতে চাইলে কমপক্ষে দুইটা অপারেন্ড লাগবে। যেমন `+` বা `*` অপারেটর ব্যবহার করতে হলে কমপক্ষে দুইটা সংখ্যা লাগবে।

এবার আসবে অপারেটরের অর্ডার। আমরা ছোট্ট একটা উদাহরন দেখি-

```
>>>5+30*20
605
>>>(5+30)*20
700
```

অর্থাৎ একই স্টেটমেন্ট শুধুমাত্র ব্র্যাকেটের কারনে দুই ধরনের ফলাফল দিচ্ছে। এর কারন সহজ। প্রত্যেকটা অপারেটরেরই কাজ করার একটা ক্রম থাকে। যেমন আমরা যদি একটা স্টেটমেন্ট লিখি-

```
>>>2+5-3*7/4%2**4
2
```

এক্ষেত্রে প্রথমে কাজ করেছে এক্সপোনেনশিয়াল(`**`), তারপর ভাগ(`/`), তারপর গুন(`*`), এরপর মডুলাস(`%`) এবং শেষে যোগ(`+`) এরপর সবশেষে বিয়োগ(`-`)। উপরের ক্রমটাই হচ্ছে অপারেটরগুলোর ওয়ার্কিং অর্ডার। বাই ডিফল্ট অপারেটরগুলো এই ক্রম অনুসারেই কাজ করে। আমরা চাইলে প্রয়োজনমত ব্র্যাকেট ব্যবহার করে আমাদের ইচ্ছামত হিসাব করতে পারি।