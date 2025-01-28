import React from 'react';
import { EngagementOptionServiceType } from 'src/types';
import { EngagementOptionsListItem } from 'src/components';
import { Heading2, PageSection, Text1 } from 'src/ui-kit';
import { CtoTreeIcon } from 'src/assets/icons';

export const FlexibleEngagementOptionsSection: React.FC<
  EngagementOptionServiceType
> = ({ title, description, services_one, services_two }): JSX.Element => (
  <PageSection className="flex flex-col items-center text-center">
    <Heading2 title={title} className=" mb-10 text-center lg:mb-5" />
    <Text1
      fontSize="text-x2-mob"
      fontSizeLg="lg:text-x1"
      className="max-w-[1037px] px-3 mb-[70px] lg:px-0 lg:mb-9"
    >
      {description}
    </Text1>
    <div className="max-w-[1224px] w-full flex flex-col gap-y-[70px] lg:block">
      <CtoTreeIcon className="hidden w-[63%] mx-auto lg:block" />
      <ul className="relative before:content-none before:absolute before:left-1/2 before:-top-[60px] before:-translate-x-[2px] before:w-0.5 before:h-[126%] before:bg-blue-warm w-full xs:grid xs:gap-y-[70px] xs:gap-x-5 lg:before:content-[''] lg:gap-x-[16%] lg:grid-cols-2 lg:pt-20">
        {services_one.map((service) => (
          <EngagementOptionsListItem key={service.id} {...service} />
        ))}
      </ul>
      <CtoTreeIcon className="hidden w-[63%] mx-auto mt-12 lg:block" />
      <ul className="relative w-full xs:grid xs:gap-y-[70px] xs:gap-x-5 lg:gap-x-[16%] lg:grid-cols-2 lg:pt-20">
        {services_two.map((service) => (
          <EngagementOptionsListItem key={service.id} {...service} />
        ))}
      </ul>
    </div>
  </PageSection>
);
