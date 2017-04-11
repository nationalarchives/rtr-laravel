<?php

namespace App;

trait DepartmentData
{
    private $departments = array([
        'name' => 'Cabinet Office',
        'url' => 'http://www.gov.uk/government/organisations/cabinet-office',
        'transfers' =>
            array(
                'legacy' => array( // Legacy
                    'total_records_held' => 16208,
                    'records_selected_for_transfer' => 1287,
                    'records_selected_for_transfer_under_lci' => 73,
                    'records_still_to_be_reviewed' => 662,
                    'records_still_to_be_reviewed_under_lci' => 5092,
                    'planned_total_for_year_end_transfer' => 671,
                    'awaiting_disposal' => 9094,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'The majority of the files awaiting review are routine administrative records, many inherited by the department in machinery of government changes. The Department has focussed resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 3590,
                    'records_selected_for_transfer' => 1105,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 105,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 1105,
                    'awaiting_disposal' => 2380,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'Records at C1 are routine administrative records.  The Department focussed resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 5209,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 2200,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 1100,
                    'awaiting_disposal' => 3009,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'The figures in this section are estimates based on current and recent years experience. The records at C1 cover routine administrative records. The Department focusses resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
                ))], [
        'name' => 'Crown Prosecution Service',
        'url' => 'http://www.cps.gov.uk',
        'transfers' =>
            array(
                'legacy' => array( // Legacy
                    'total_records_held' => 1542,
                    'records_selected_for_transfer' => 378,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 378,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1164,
                    'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1960 to 1974 and 1985 to 1988 will be before the next Advisory Council meeting on 21 July, 2016."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1353,
                    'records_selected_for_transfer' => 61,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 70,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 31,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1222,
                    'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1989 to 1990 will be before the next Advisory Council meeting on 21 July, 2016. Records planned for transfer excludes records for year 1990."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 1526,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 1526,
                    'planned_total_for_year_end_transfer' => 90,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1991 to 1992 will be before the next Advisory Council meeting on 21 July, 2016."
                ))],

        [
            'name' => 'Department for Business, Innovation and Skills',
            'url' => 'https://www.gov.uk/government/organisations/department-for-business-innovation-skills',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 11065,
                        'records_selected_for_transfer' => 987,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 4234,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 400,
                        'awaiting_disposal' => 5844,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "BIS has developed, in conjunction with TNA, a three year Records Review and Transfer plan. The plan includes the review, cataloguing and preparation of files for transfer of all legacy and 2016/17 records by the end of 2018. This plan will be presented to the Advisory Council in July. Additional staff have been recruited to address the issue of legacy records and transfer of records to TNA."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 3631,
                        'records_selected_for_transfer' => 162,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1942,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 1527,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Please see explanatory comments under the legacy section."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 3770,
                        'records_selected_for_transfer' => 147,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 2023,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 1600,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Please see explanatory comments under the legacy section."

                    ))],

        [
            'name' => 'Department for Communities and Local Government',
            'url' => 'https://www.gov.uk/government/organisations/department-for-communities-and-local-government',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 3370,
                        'records_selected_for_transfer' => 316,
                        'records_selected_for_transfer_under_lci' => 5,
                        'records_still_to_be_reviewed' => 27,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 316,
                        'awaiting_disposal' => 3022,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 3290,
                        'records_selected_for_transfer' => 1304,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 706,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 1318,
                        'awaiting_disposal' => 1280,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 1891,
                        'records_selected_for_transfer' => 19,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1636,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 52,
                        'awaiting_disposal' => 236,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
                    ))],

        [
            'name' => 'Department for Culture, Media and Sport',
            'url' => 'https://www.gov.uk/dcms',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 1774,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1763,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 11,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 1595,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1466,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 129,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 2057,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1995,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 62,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
                    ))],

        [
            'name' => 'Department for Education',
            'url' => 'https://www.gov.uk/dfe',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 6374,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 317,
                        'records_still_to_be_reviewed_under_lci' => 6057,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The Department holds 317 legacy records which have not yet been reviewed. Due to earlier MOG changes 327 legacy records have been transferred to the Department for Business, Innovation and Skills since the Autumn 2015 RTR. We are working with TNA to review and dispose of these records and hope to complete this by the end of 2016. We have Retention Instruments covering 6057 records on children's homes which are still required for business use. The increase of 265 since the previous RTR is due to a review we conducted of the children's homes files we hold, which resulted in our successful application for a further RI covering these additional records."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 1260,
                        'records_selected_for_transfer' => 291,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 969,
                        'planned_total_for_year_end_transfer' => 291,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Since completing the RTR for Autumn 2015 we have acquired Retention Instruments to cover 924 records on children's homes which are still required for business use and for a further 45 records on buildings management which are not of any on-going historical value but are required for business use. In addition 557 records have been transferred to the Department for Business, Innovation and Skills following earlier MOG changes. The reduction in the number of files planned for transfer in 2016 is due to an error in the response to the last RTR, when all the split parts of the files were counted instead of just the number of records."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 3895,
                        'records_selected_for_transfer' => 252,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 842,
                        'records_still_to_be_reviewed_under_lci' => 1166,
                        'planned_total_for_year_end_transfer' => 375,
                        'awaiting_disposal' => 1635,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The Department has Retention Instruments to cover 1146 records on children's homes which are still required for business use and to cover a further 20 records on buildings management, which are not of any on-going historical value but are required for business use."
                    ))],

        [
            'name' => 'Department of Energy and Climate Change',
            'url' => 'https://www.gov.uk/government/organisations/department-of-energy-climate-change',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 1490,
                        'records_selected_for_transfer' => 499,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 860,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 200,
                        'awaiting_disposal' => 131,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "BIS has developed with DECC, in conjunction with TNA, a three year Records Review and Transfer plan (as part of the KIM/Records Management Service Level Agreement between both Departments). The plan includes the review, cataloguing and preparation of files for transfer of all legacy and 2016/17 records by the end of 2018. This plan will be presented to the Advisory Council in July. Additional staff have been recruited to address the issue of legacy records and transfer of records to TNA."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 239,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 227,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 12,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Please see explanatory comments under the legacy section."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 597,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 291,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 306,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Please see explanatory comments under the legacy section."
                    ))],

        [
            'name' => 'Department for Environment, Food and Rural Affairs',
            'url' => 'https://www.gov.uk/government/organisations/department-for-environment-food-rural-affairs',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 21055,
                        'records_selected_for_transfer' => 347,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 8160,
                        'records_still_to_be_reviewed_under_lci' => 645,
                        'planned_total_for_year_end_transfer' => 315,
                        'awaiting_disposal' => 357,
                        'awaiting_disposal_under_lci' => 11546,
                        'comments' => "The majority of files at A1 will be appraised in the current business year. The files at C2 have been appraised, do not meet the TNA's record collection policy but are being retained for ongoing business use. From 1/7/16 we expect to receive up to 34 000 ex Fera records for storage and/or appraisal.  Their status and age cannot be determined at this time but will be declared on the Autumn 2016 RTR"
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 23223,
                        'records_selected_for_transfer' => 28,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1615,
                        'records_still_to_be_reviewed_under_lci' => 5,
                        'planned_total_for_year_end_transfer' => 101,
                        'awaiting_disposal' => 338,
                        'awaiting_disposal_under_lci' => 21237,
                        'comments' => "Legacy comments re: A1, C2 and Fera"
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 3862,
                        'records_selected_for_transfer' => 40,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 2943,
                        'records_still_to_be_reviewed_under_lci' => 119,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 760,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "See Legacy comments re: A1, C2 and Fera. Nil return declared within 'Records planned for transfer' as no decision has yet been made with TNA's Transfer Supervisor."
                    ))],

        [
            'name' => 'Department for International Development',
            'url' => 'https://www.gov.uk/government/organisations/department-for-international-development',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 15,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 12,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 3,
                        'planned_total_for_year_end_transfer' => 12,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Three records are awaiting further sensitivity review."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 4294,
                        'records_selected_for_transfer' => 163,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 3282,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 688,
                        'awaiting_disposal' => 849,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Estimated figure DFID operated on a three year file period during this time. Figures relate to records covering 1989-91."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 14000,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 14000,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 2100,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DFID operated a three year file period during this time.  Figures relate to records covering 1992-94."
                    ))],

        [
            'name' => 'Department for Transport',
            'url' => 'https://www.gov.uk/government/organisations/department-for-transport',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 2730,
                        'records_selected_for_transfer' => 73,
                        'records_selected_for_transfer_under_lci' => 21,
                        'records_still_to_be_reviewed' => 2630,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 46,
                        'awaiting_disposal' => 6,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The volume of legacy records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. 1938 of the legacy records are from the Maritime and Coastguard Agency, where a programme of review and disposal continues as planned. A further 700 have been identified by DVLA as part of an exercise to audit and reconcile records listed incorrectly within other storage accounts. More accurate data will be provided once the reconciliation is complete, and work to review and dispose of them in line with the business need is now underway."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 9910,
                        'records_selected_for_transfer' => 24,
                        'records_selected_for_transfer_under_lci' => 4,
                        'records_still_to_be_reviewed' => 1835,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 34,
                        'awaiting_disposal' => 8047,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The volume of in-year records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. DVSA has recently identified a collection of 7956 former VOSA records awaiting disposal, and plans are in place to action these within the current year. A further 1197 records are from the Maritime and Coastguard Agency, where a programme of review and disposal continues as planned."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 2143,
                        'records_selected_for_transfer' => 59,
                        'records_selected_for_transfer_under_lci' => 4,
                        'records_still_to_be_reviewed' => 2074,
                        'records_still_to_be_reviewed_under_lci' => 1,
                        'planned_total_for_year_end_transfer' => 95,
                        'awaiting_disposal' => 5,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The volume of next years’ records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. The number of records planned for transfer is an estimate, that equates to those files already selected plus approx. 2% of those remaining for review."
                    ))],


        [
            'name' => 'Department for Work and Pensions',
            'url' => 'https://www.gov.uk/government/organisations/department-for-work-pensions',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 0,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "DWP holds no legacy files."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 18731,
                        'records_selected_for_transfer' => 2540,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 2540,
                        'awaiting_disposal' => 16191,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "This is the number of records planned for transfer to TNA by 31st December 2016."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 31250,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 20666,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 3000,
                        'awaiting_disposal' => 10584,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The total to transfer is not known at this stage. This figure is based on the percentage of the total that we usually transfer."
                    ))],

        [
            'name' => 'Department of Health',
            'url' => 'https://www.gov.uk/government/organisations/department-of-health',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 12570,
                        'records_selected_for_transfer' => 268,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 8381,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 3921,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "268 records are prepared and will be checked by TNA during their visit in July 2016. Work is progressing on securing retention instrument for those records required by the IICSA."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 19866,
                        'records_selected_for_transfer' => 382,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 19412,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 72,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "51 records are prepared and will be checked by TNA during their visit in July 2016. Work is progressing on securing retention instrument for those records required by the IICSA."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 22594,
                        'records_selected_for_transfer' => 326,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 22219,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 49,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => ""
                    ))],

        [
            'name' => 'Foreign and Commonwealth Office',
            'url' => 'https://www.gov.uk/archive-records',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 171446,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 22016,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 141893,
                        'planned_total_for_year_end_transfer' => 16028,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 7537,
                        'comments' => "This reflects annual departmental files. It excludes files in legacy series identified during an audit in 2014, which are currently being appraised. Approx 13% of files in these legacy series may fall within The National Archives' collection policy and may be listed as annual departmental files. These figures also exclude non-standard legacy files held by the FCO. See www.gov.uk/archive-records for more information on the FCO's total archive holdings and the record release programme, including the non-standard holdings. All FCO files overdue to review under the Public Records Act are held under a Retention Instrument."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 74316,
                        'records_selected_for_transfer' => 2425,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 70866,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 1025,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "These files are not yet overdue for transfer and therefore are not subject to a Retention Instrument. 16028 files from 1984, 1985 and 1986 will transfer during this year."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 73802,
                        'records_selected_for_transfer' => 825,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 72977,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Approx 18000 files from 1986, 1987 and 1988 will transfer during this period."
                    ))],

        [
            'name' => 'Health and Safety Executive',
            'url' => 'http://www.hse.gov.uk/foi/retention-schedule.htm',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 0,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => ""
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 15350,
                        'records_selected_for_transfer' => 21,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 5371,
                        'records_still_to_be_reviewed_under_lci' => 357,
                        'planned_total_for_year_end_transfer' => 123,
                        'awaiting_disposal' => 9601,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Records retained under LCI/RI no.'s 85 and 111. CRD files - RI applied for awaiting confirmation of the number. Records selected for transfer total includes CRD files but other fields do not as we have no access to their database to provide this information. Records planned for transfer are 123 CRD files which have not been included in overall total as this skews the stats for 2016."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 21834,
                        'records_selected_for_transfer' => 682,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 21152,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Numbers can not be provided as these records have not been reviewed. Records retained covered by RI/LCI no 85. CRD files - RI applied for awaiting confirmation of the RI no."
                    ))],

        [
            'name' => 'HM Revenue and Customs',
            'url' => 'http://www.hmrc.gov.uk',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 409,
                        'records_selected_for_transfer' => 96,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 285,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 96,
                        'awaiting_disposal' => 28,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "HMRC continues to progress with the TNA agreed plan to prepare identified legacy records for transfer during 2016.  Legacy transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 2,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 2,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "HMRC continues to progress with the TNA agreed plan to prepare identified legacy records for transfer during 2016.  Legacy transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 493,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 493,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. 489 files identified for potential 2017 transfer have yet to be reviewed and may subsequently not be suitable for transfer. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
                    ))],

        [
            'name' => 'HM Treasury',
            'url' => 'https://www.gov.uk/government/organisations/hm-treasury',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 95970,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 30941,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 63559,
                        'planned_total_for_year_end_transfer' => 30941,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 1470,
                        'comments' => "HM Treasury is running behind TNA’s 20-year Rule Transition Plan but we are systematically working through our legacy over the next few years under a plan agreed with the Advisory Council on National Records and Archives."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 46235,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 32584,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 13651,
                        'comments' => "Because HM Treasury is running behind TNA’s 20-year Rule Transition Plan the transfer of files from 1989-90 will happen in 2017, not 2016. This approach has been agreed with the Advisory Council on National Records and Archives."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 36305,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 34680,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 1625,
                        'comments' => "No Retention Instrument (RI) is required for any of these records at present as none are due for transfer until the end of December 2017. We anticipate that a new RI will be required to hold 1991-92 records in 2018 and we will seek one next year."
                    ))],

        [
            'name' => 'Home Office',
            'url' => 'https://www.gov.uk/government/organisations/home-office',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 12625,
                        'records_selected_for_transfer' => 346,
                        'records_selected_for_transfer_under_lci' => 3104,
                        'records_still_to_be_reviewed' => 930,
                        'records_still_to_be_reviewed_under_lci' => 2026,
                        'planned_total_for_year_end_transfer' => 500,
                        'awaiting_disposal' => 1094,
                        'awaiting_disposal_under_lci' => 5125,
                        'comments' => "Home Office is prioritising work to reduce legacy files and anticipates more transfers this year than shown. This will be updated in the Autumn records transfer report."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 7350,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 7350,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Work on these files is temporarily halted whilst legacy files are addressed. Typically only 5-10% of surviving files are selected for transfer and Home Office anticipates that the majority of the files identified above will not be selected"
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 19209,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 19209,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Work on these files is temporarily halted whilst legacy files are addressed. Typically only 5-10% of surviving files are selected for transfer and Home Office anticipates that the majority of the files identified above will not be selected."
                    ))],

        [
            'name' => 'Ministry of Defence',
            'url' => 'https://www.gov.uk/government/publications/mods-records-transfer-report-and-explanation',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 501476,
                        'records_selected_for_transfer' => 437250,
                        'records_selected_for_transfer_under_lci' => 8000,
                        'records_still_to_be_reviewed' => 9500,
                        'records_still_to_be_reviewed_under_lci' => 46000,
                        'planned_total_for_year_end_transfer' => 3652,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 726,
                        'comments' => "Records at (A1) are predominantly Defence estate maps and plans, with those at (A2) being World War Two RAF casualty packs. Records at (B1) are predominantly service personnel records with a year of birth of pre-1902, a study is currently being conducted by the MOD to determine how best to transfer these to The National Archives.  Those at (B2) are also World War Two RAF casualty packs, but these have been reviewed and selected for transfer to TNA."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 34282,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 5000,
                        'records_still_to_be_reviewed' => 2000,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 3239,
                        'awaiting_disposal' => 27282,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "The records at A(1) are predominantly administrative registered files, whilst those records selected for transfer include Ships Logs and RAF Operational Record Books. The records awaiting disposal are mainly administrative registered files that the department would normally have destroyed but can’t due to the self-imposed preservation order on records that might be required for the Independent Inquiry into Child Sexual Abuse. All Ships Logs dated to 1995 will be transferred to TNA this year."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 62200,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 500,
                        'records_still_to_be_reviewed' => 61700,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 0,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "(A1) shows the number of records in the MOD Main and Sensitive archives identified from this period. Records at (B2) are RAF Operational Record Books. The number of records to be transferred in this period, has yet to be agreed with TNA."
                    ))],

        [
            'name' => 'Ministry of Justice',
            'url' => 'http://www.justice.gov.uk',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 2313,
                        'records_selected_for_transfer' => 2313,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 2313,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Due to the complex nature of the JCPC records, we continue to work alongside TNA and Harwell to make these records ready for transfer. The figure given above will be ready for transfer by the end of 2016."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 6146,
                        'records_selected_for_transfer' => 378,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 5768,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 628,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "For records planned for transfer, estimated 250 to transfer out of the figure at A1 plus those already selected at B1."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 27015,
                        'records_selected_for_transfer' => 45,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 26970,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 2742,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "For records planned for transfer, 10% estimate of figure at 1A plus those already selected for transfer at 1B."
                    ))],

        [
            'name' => 'Northern Ireland Office',
            'url' => 'https://www.gov.uk/government/organisations/northern-ireland-office',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 1249,
                        'records_selected_for_transfer' => 818,
                        'records_selected_for_transfer_under_lci' => 431,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 1249,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Review of all records complete, timing of transfer to TNA to be agreed."
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 2129,
                        'records_selected_for_transfer' => 444,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 1685,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 1455,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "Transfer to TNA of selected files from 1990 likely to occur in early 2017."
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 3441,
                        'records_selected_for_transfer' => 0,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 3441,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 2065,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => "These figures are estimates based on previous years destruction percentages."
                    ))],

        [
            'name' => 'Ordnance Survey',
            'url' => 'http://www.ordnancesurvey.co.uk/',
            'transfers' =>
                array(
                    'legacy' => array( // Legacy
                        'total_records_held' => 1000,
                        'records_selected_for_transfer' => 1000,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 1000,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => ""
                    ),
                    'current_year' => array( // Current year
                        'total_records_held' => 500,
                        'records_selected_for_transfer' => 500,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 500,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => ""
                    ),
                    'forecast' => array( // Forecast
                        'total_records_held' => 200,
                        'records_selected_for_transfer' => 200,
                        'records_selected_for_transfer_under_lci' => 0,
                        'records_still_to_be_reviewed' => 0,
                        'records_still_to_be_reviewed_under_lci' => 0,
                        'planned_total_for_year_end_transfer' => 200,
                        'awaiting_disposal' => 0,
                        'awaiting_disposal_under_lci' => 0,
                        'comments' => ""
                    ))]);
}