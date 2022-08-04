   <!-- divider: what makes us different -->
   <section class="divider bg-lightest">
      <div class="container pt-70 pb-60">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <div id="full-event-calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<script>
  var calendarEvents= [
    {
        title: 'Vasanta Panchami',
        url: '',
        start: '2022-02-05'
    },
    {
        title: "Sri Advaita Acharya's Appearance Day",
        url: '',
        start: '2022-02-07'
    },
    {
        title: 'Bhaimi Ekadashi',
        url: '',
        start: '2022-02-12',
       
    },
    {
        title: 'Varaha Dvadashi',
        url: '',
        start: '2022-02-13',
       
    },
    {
        title: "Nityananda Trayodashi : Sri Nityananda Prabhu's Appearance Day",
        url: '',
        start: '2022-02-14',
       
    },
    {
        title: "Srila Bhaktisiddhanta Sarasvati Thakura's Appearance",
        url: '',
        start: '2022-02-21',
       
    },
    {
        title: "Trisparsha Mahadvadashi",
        url: '',
        start: '2022-02-27',
       
    },
   
   
    {
        title: "Shiva Ratri",
        url: '',
        start: '2022-03-01',
       
    },
    {
        title: "Srila Jagannatha Dasa Babaji's Disappearance Day",
        url: '',
        start: '2022-03-03',
       
    },
    {
        title: "Amalaki Ekadashi",
        url: '',
        start: '2022-03-14',
       
    },
    {
        title: "Gaura Purnima : Sri Caitanya Mahaprabhu's Appearance Day",
        url: '',
        start: '2022-03-18',
       
    },
    {
        title: "Festival of Jagannatha Mishra",
        url: '',
        start: '2022-03-19',
       
    },
    {
        title: "Papmochani Ekadashi",
        url: '',
        start: '2022-03-28',
       
    },
   
   
    {
        title: "Sri Rama Navami",
        url: '',
        start: '2022-04-10',
       
    },
    {
        title: "Kamada Ekadashi Vrat",
        url: '',
        start: '2022-04-13',
       
    },
    {
        title: "Beginning of Tulasi Jala Dan",
        url: '',
        start: '2022-04-14',
       
    },
    {
        title: "Varuthini Ekadashi Vrat",
        url: '',
        start: '2022-04-26',
       
    },
   
    {
        title: "Akshaya Tritiya, Chandana Yatra Starts (Continues for 21 days)",
        url: '',
        start: '2022-05-03',
       
    },
    {
        title: "Mohini Ekadashi Vrat",
        url: '',
        start: '2022-05-12',
       
    },
    {
        title: "End of Tulasi Jala Dan",
        url: '',
        start: '2022-05-14',
       
    },
    {
        title: "Narasimha Chaturdashi : Narasimhadev's Appearance Day",
        url: '',
        start: '2022-05-15',
       
    },
    {
        title: "Apara Ekadashi",
        url: '',
        start: '2022-05-26',
       
    },
  
  
    {
        title: "Pandava Nirjala Ekadashi",
        url: '',
        start: '2022-06-11',
       
    },
    {
        title: "Trisparsha Mahadvadashi",
        url: '',
        start: '2022-06-11',
       
    },
    {
        title: "Trisparsha Mahadvadashi",
        url: '',
        start: '2022-06-11',
       
    },
    {
        title: "Panihati Chida Dahi Utsava",
        url: '',
        start: '2022-06-12',
       
    },
    {
        title: "Snana Yatra",
        url: '',
        start: '2022-06-14',
       
    },
    {
        title: "Yogini Ekadashi",
        url: '',
        start: '2022-06-24',
       
    },
    {
        title: "Srila Bhaktivinoda Thakura's Disappearance Day",
        url: '',
        start: '2022-06-29',
       
    },
    {
        title: "Gundica Marjana",
        url: '',
        start: '2022-06-30',
       
    },
    
    
    {
        title: "Ratha Yatra",
        url: '',
        start: '2022-07-01',
       
    },
    {
        title: "Hera Panchami",
        url: '',
        start: '2022-07-05',
       
    },
    {
        title: "Return Ratha Yatra",
        url: '',
        start: '2022-07-09',
       
    },
    {
        title: "Shayana Ekadashi",
        url: '',
        start: '2022-07-10',
       
    },
    {
        title: "1st Chaturmasya begins - Fasting from Shak(green leafy vegetable)",
        url: '',
        start: '2022-07-13',
       
    },
    {
        title: "Kamika Ekadashi",
        url: '',
        start: '2022-07-24',
       
    },
    
    
    {
        title: "Radha Govinda Jhulana Yatra Begins",
        url: '',
        start: '2022-08-08',
       
    },
    {
        title: "Pavitropana Ekadashi",
        url: '',
        start: '2022-08-08',
       
    },
    {
        title: "Balarama Jayanti : Lord Balarama's Appearance Day",
        url: '',
        start: '2022-08-12',
       
    },
    {
        title: "Last day of the 1st Chaturmasya",
        url: '',
        start: '2022-08-11',
       
    },
    {
        title: "2nd Chaturmasya begins - Fasting from Yogurt",
        url: '',
        start: '2022-08-12',
       
    },
    {
        title: "Sri Krishna Janmashtami : Appearance Day of Lord Krishna",
        url: '',
        start: '2022-08-19',
       
    },
    {
        title: "Vyasa Puja : Srila Prabhupada's Appearance Day",
        url: '',
        start: '2022-08-20',
       
    },
    {
        title: "Annada Ekadashi",
        url: '',
        start: '2022-08-23',
       
    },
    {
        title: "Unmilani Mahadvadashi",
        url: '',
        start: '2022-08-23',
       
    },
 
 
    {
        title: "Vamana Dvadashi",
        url: '',
        start: '2022-09-07',
       
    },
    {
        title: "Radhashtami : Appearance Day of Srimati Radharani",
        url: '',
        start: '2022-09-04',
       
    },
    {
        title: "Parshva Ekadashi",
        url: '',
        start: '2022-09-07',
       
    },
    {
        title: "Srila Bhaktivinoda Thakura's Appearance Day",
        url: '',
        start: '2022-09-08',
       
    },
    {
        title: "Last day of the 2nd Chaturmasya",
        url: '',
        start: '2022-09-09',
       
    },
    {
        title: "3rd Chaturmasya begins - Fasting from Milk",
        url: '',
        start: '2022-09-10',
       
    },
    {
        title: "Acceptance of Sannyasa by Srila Prabhupada",
        url: '',
        start: '2022-09-10',
       
    },
    {
        title: "Srila Prabhupada's Arrival in the USA",
        url: '',
        start: '2022-09-17',
       
    },
    {
        title: "Indira Ekadashi",
        url: '',
        start: '2022-09-21',
       
    },
    
    {
        title: "Ramachandra Vijayotsava",
        url: '',
        start: '2022-10-05',
       
    },
    {
        title: "Pashankusha Ekadashi",
        url: '',
        start: '2022-10-06',
       
    },
    {
        title: "Last day of the 3rd Chaturmasya",
        url: '',
        start: '2022-10-08',
       
    },
    {
        title: "4th Chaturmasya begins - Fasting from Urad Dal",
        url: '',
        start: '2022-10-09',
       
    },
    {
        title: "Rama Ekadashi",
        url: '',
        start: '2022-10-21',
    },
    {
        title: "Dipa Dana, Dipavali, Kali Puja",
        url: '',
        start: '2022-10-25',
       
    },
    {
        title: "Govardhana Puja",
        url: '',
        start: '2022-10-26',
    },
    {
        title: "Srila Prabhupada's Disappearance Day",
        url: '',
        start: '2022-10-29',
       
    },
    {
        title: "Srila Gaura Kishora Dasa Babaji's Disappearance Day",
        url: '',
        start: '2022-11-04',
       
    },
    {
        title: "Utthana Ekadashi",
        url: '',
        start: '2022-11-04',
       
    },
    {
        title: "Last day of the 4th Chaturmasya",
        url: '',
        start: '2022-11-07',
       
    },
    {
        title: "Tulasi Saligrama Vivaha",
        url: '',
        start: '2022-11-08',
       
    },
    {
        title: "Utpanna Ekadashi",
        url: '',
        start: '2022-11-20',
       
    },
    {
        title: "Odana Shashthi",
        url: '',
        start: '2022-11-29',
       
    },
   
    {
        title: "Advent of Srimad Bhagavad Gita",
        url: '',
        start: '2022-12-03',
       
    },
    {
        title: "Mokshada Ekadashi",
        url: '',
        start: '2022-12-04',
       
    },
    {
        title: "Srila Bhaktisiddhanta Sarasvati Thakura's Disappearance Day",
        url: '',
        start: '2022-12-12',
       
    },
    {
        title: "Saphala Ekadashi",
        url: '',
        start: '2022-12-19',
       
    },
   
];
</script>