---
extends: _layouts.post
title: লারাভেল হোমস্টিড ইনস্টলেশন
date: '2016-02-10'
gist: লারাভেল হোমস্টিডের মাধ্যমে ডেভেলপমেন্ট এনভায়রনমেন্ট তৈরি করা।
section: content
syntaxHighlight: true
categories: []
---

লারাভেল একটি চমৎকার পিএইচপি ফ্রেমওয়ার্ক। যারা লারাভেল শিখতে চায় তারা প্রথমেই যে সমস্যাটার কথা বলেন, সেটি হচ্ছে এর ডেভেলপমেন্ট এনভায়রনমেন্ট সেটআপ করা। লারাভেলের অনেকগুলি ডিপেন্ডেন্সি আছে। যেমন লারাভেল ৫.২ এর সার্ভার রিকোয়ারমেন্ট হচ্ছে-

- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

এছাড়া পুরনো ভার্সনের লারাভেলে পিএইচপির `mcrypt` এক্সটেনশন ব্যবহার করা হতো। এগুলি সেটআপ করা ঝামেলার এবং সময়সাপেক্ষ। এছাড়াও ওয়েব সার্ভার যেমন- এনজিনেক্স, ডেটাবেজ সার্ভার, রেডিস সার্ভার, মেমক্যাশ সার্ভার, কিউ সার্ভার যেমন- বিনস্টকড ইনস্টল এবং কনফিগার করা অত্যন্ত ঝামেলার। এছাড়া কিছু টুল যেমন- বিনস্টকড উইন্ডোজ মেশিনে ইনস্টলও করা যায় না।

লারাভেল এ ঝামেলা থেকে বাঁচানোর জন্য খুব সহজ একটি উপায় তৈরি করে রেখেছে। এটি হচ্ছে লারাভেলের ডেভেলপমেন্ট এনভায়রনমেন্ট যা হোমস্টিড নামে পরিচিত।

![Laravel loves Vagrant](/images/posts/laravel-vagrant.png)

হোমস্টিড ভ্যাগরেন্ট নামে একটি সার্ভিস ব্যবহার করে তৈরি করা হয়েছে, যা আসলে ভার্চুয়াল মেশিনের একটি এবস্ট্রাকশন। ভার্চুয়াল মেশিন কি আমরা সবাই জানি। এটি হচ্ছে আপনার মেশিনের বা অপারেটিং সিস্টেমের ভেতরে চলমান আরেকটি মেশিন বা অপারেটিং সিস্টেম। বর্তমানে প্রচলিত সবচেয়ে জনপ্রিয় দুটি ভার্চুয়াল মেশিন সফটয়্যারের নাম হচ্ছে ভার্চুয়াল বক্স এবং ভিএমওয়্যার। হোমস্টিড এ দুটি প্রোভাইডারই সাপোর্ট করে, তবে এটির ডিফল্ট প্রোভাইডার হলো ভার্চুয়াল বক্স। এ উদাহরনেও আমরা ভার্চুয়াল বক্সই ব্যবহার করবো। এর প্রধান কারন হচ্ছে ভিএমওয়্যারের ভ্যাগরেন্ট প্রোভাইডার কিনতে হয় যেখানে ভার্চুয়াল বক্সেরটা ফ্রি। ভার্চুয়াল মেশিন সম্পর্কে আরো বিস্তারিত জানতে [এখানে](https://en.wikipedia.org/wiki/Virtual_machine) ঢু মারতে পারেন।

অনেক কথা হলো, এবার চলুন কিভাবে আপনি আপনার পিসিতে হোমস্টিড সেটআপ করবেন তা দেখি। প্রথম ধাপ হচ্ছে ভার্চুয়াল বক্স ডাউনলোড করে ইনস্টল দেয়া। এটি খুবই সহজ। আপনি ভার্চুয়াল বক্সের [অফিশিয়াল ওয়েবসাইট](https://www.virtualbox.org/wiki/Downloads) থেকে অপারেটিং সিস্টেমের জন্য প্রয়োজনীয় ইনস্টলারটি ডাউনলোড করে ইনস্টল করে নিবেন। এরপর ভ্যাগরেন্টের [অফিশিয়াল সাইট](https://www.vagrantup.com/downloads.html) থেকে ইনস্টলার ডাউনলোড করে সেটিও ইনস্টল করে নেবেন। লক্ষ্য রাখবেন, এ দুটি সফটয়্যারের ইনস্টল লোকেশন যেন আপনার পাথ ভ্যারিয়েবলে থাকে। বাই ডিফল্ট এটি আপনার পাথেই ইনস্টল হবার কথা, তাই এ নিয়ে চিন্তা না করলেও চলবে। এ অবস্থায় আপনি যদি আপনার টার্মিনালে নিচের কমান্ডটি লিখেন, তাহলে দেখবেন-

```
vagrant -v
1.8.1
```

এবার আপনি নিচের কমান্ডটির মাধ্যমে হোমস্টিড বক্স এড করুন আপনার মেশিনে-

```
vagrant box add laravel/homestead
```

এই কমান্ডটি বেশ খানিকটা সময় নেবে, কারন এর মাধ্যমে প্রায় ১ গিগাবাইট ডেটা ডাউনলোড হবে, যার মধ্যে উবুন্টু, সমস্ত সার্ভার, ডেটাবেজ, কনফিগারেশন ফাইল থাকবে।

এবার আপনি আপনার রুট ডিরেক্টরিতে যান, এবং নিচের গিট কমান্ডটির মাধ্যমে হোমস্টিডের গিট রিপোজিটরিটি ক্লোন করুন। আপনার মেশিনে যদি গিট ইনস্টল করা না থাকে, এখনই করে নিন।

```
cd ~
git clone https://github.com/laravel/homestead.git Homestead
```

এরপর আপনি হোমস্টিড ডিরেক্টরিতে প্রবেশ করুন, নিচের কমান্ডটি দিন-

```
cd ~/Homestead
bash init.sh
```

এই কমান্ডটির ফলে আপনার রুট ডিরেক্টরিতে `.homestead/Homestead.yaml` নামে একটি ফাইল তৈরি হবে। এই ফাইলটি আপনার হোমস্টিডের কনফিগারেশন ফাইল। এটি দেখতে অনেকটা এরকম-

```
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Code
      to: /home/vagrant/Code

sites:
    - map: homestead.app
      to: /home/vagrant/Code/homestead/public

databases:
    - homestead

# blackfire:
#     - id: foo
#       token: bar
#       client-id: foo
#       client-token: bar

# ports:
#     - send: 50000
#       to: 5000
#     - send: 7777
#       to: 777
#       protocol: udp
```

এই ফাইলের প্রথমেই আছে আইপি, মেমরি, সিপিইউ এবং প্রোভাইডার। আইপি হচ্ছে যে আইপি থেকে আপনি আপনার ভ্যাগরেন্ট বক্স এক্সেস করতে পারবেন, মেমরি হচ্ছে ভ্যাগরেন্ট বক্সে আপনি কি পরিমান মেমরি এলোকেট করতে চান, সিপিইউ হচ্ছে ভ্যাগরেন্ট বক্সের সিপিইউ কোরের সংখ্যা। এরপরের অথোরাইজ এবং কি হচ্ছে আপনার এসএসএইচ কি যার মাধ্যমে আপনি ভ্যাগরেন্ট বক্সে ঢুকতে পারবেন। আপনার যদি গিটহাবে কোন একাউন্ট থেকে থাকে তাহলে আপনি খুব সহজেই আপনার পিসিতে এসএসএইচ কি তৈরি করে নিতে পারেন। এটি সম্পর্কে বিস্তারিত জানতে [এখানে](https://help.github.com/articles/generating-an-ssh-key) দেখুন।

এরপরই আছে ফোল্ডার অপশন। এর প্রথমে আছে map কি, যা আপনার পিসির একটি ফোল্ডারকে নির্দেশ করবে, আর to কি আপনার ভ্যাগরেন্ট বক্সের একটি ফোল্ডারকে নির্দেশ করবে। এই দুইটি ফোল্ডার একটি অপরটির সাথে সিনক্রোনাইজেশনে থাকবে। যার ফলে আপনি আপনার লোকাল মেশিনে ফাইল চেঞ্জ করলে আপনার ভার্চুয়াল বক্সেও ফাইলটি চেঞ্জ হয়ে যাবে। আমরা এক্ষেত্রে ডিফল্ট সেটিংসই ব্যবহার করবো। এরপর আমাদের পিসির রুটে Code নামে একটি ফোল্ডার তৈরি করলেই চলবে।

এরপরই আছে sites অপশন, যেটা আপনার প্রজেক্টকে নির্দেশ করবে। এর ম্যাপ কি আপনার কাস্টম ডোমেইন, এবং টু কি আপনার প্রজেক্টের পাবলিক পাথ নির্দেশ করবে। বাই ডিফল্ট homestead.app নামে একটি ডোমেইন ম্যাপ করা থাকে। এরপর আছে ডেটাবেজেস কি, যেটিতে উল্লেখ করা প্রত্যেকটি কি-এর নামে একটি করে ডেটাবেজ তৈরি অটোমেটিক্যালি তৈরি হবে।

এর নিচে আছে ব্ল্যাকফায়ার এবং পোর্টস কি, যা ডিফল্টভাবে কমেন্ট আউট করা থাকবে। আপনি যদি ব্ল্যাকফায়ার প্রোফাইলার ব্যবহার করেন তাহলে সেটি আনকমেন্ট করবেন এবং যদি ডিফল্ট পোর্ট ওভাররাই করতে চান তাহলে পোর্টস কি আনকমেন্ট করবেন।

আমাদের ভ্যাগরেন্ট সেটআপের কাজ শেষ। এবার চলুন ভ্যাগরান্ট চালু করে দেখি। এর জন্য যে ফোল্ডারে আমরা হোমস্টিডের গিট রিপোজিটরি ক্লোন করেছি সেটিতে ঢুকতে হবে। তারপর নিচের কমান্ডটি দিতে হবে-

```
cd ~/Homestead
vagrant up
```

এই কমান্ডের মাধ্যমে আপনার ভ্যাগরেন্ট সার্ভার চালু হবে। এবার ভ্যাগরেন্ট মেশিনে লগ-ইন করতে নিচের কমান্ডটি লিখুন-

```
vagrant ssh
```

এবার আপনি আপনার ভ্যাগরেন্ট মেশিনে আপনার অ্যাপ্লিকেশন ডেভেলপমেন্ট চালিয়ে যেতে পারবেন।

চলুন, প্রথমেই আমরা নিচের কমান্ডটির মাধ্যমে লারাভেল ইনস্টল দিই-

```
composer create-project laravel/laravel homestead --prefer-dist
```

এবার আপনার এই টার্মিনাল চালু থাকা অবস্থায় আরেকটি টার্মিনাল উইন্ডোতে আপনার হোস্ট ফাইলটি ওপেন করুন। লিনাক্স বা ম্যাক অপারেটিং সিস্টেমে এটি থাকে `/etc/hosts` নামক ফাইলে। সেটিতে নিচের লাইনটি যুক্ত করুন-

```
192.168.10.10   homestead.app
```

এবার আপনার ব্রাউজারে `homestead.app` ইউআরএলে ঢুকলে আপনি লারাভেলের ডিফল্ট ওয়েলকাম পেজটি দেখতে পাবেন।

যদি কখনো আপনার আরো কোন প্রজেক্ট যুক্ত করার প্রয়োজন পড়ে, তাহলে আপনি `.homestead/Homestead.yaml` ফাইলে এডিট করে সাইটস সেকশনে আরেকটি কি-ভ্যালু পেয়ার যুক্ত করুন এবং আপনার হোস্ট ফাইলে ম্যাপিং ইউআরএলটি একই আইপিতে ম্যাপ করুন। এবার আপনার ক্লোন করা হোমস্টিড ফোল্ডারে ঢুকে নিচের কমান্ডটি দিন-

```
vagrant provision
```

আশা করি আপনার হোমস্টিড সেটআপ করতে কোন সমস্যা হবে না। যদি এরপরও কোন সমস্যায় পড়েন তাহলে [লারাভেলের ডকুমেন্টেশনে](https://laravel.com/docs/5.2/homestead) দেখতে পারেন অথবা নিচের কমেন্টে আমাকে জানাতে পারেন।
