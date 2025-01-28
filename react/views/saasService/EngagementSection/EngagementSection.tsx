import React from 'react';
import cn from 'classnames';
import { EngagementServiceType } from 'src/types';
import { EngagementListItem } from 'src/components';
import { Button, Heading3, PageSection, Text2 } from 'src/ui-kit';
import { ArrowIcon, SaasTreeIcon } from 'src/assets/icons';

export const EngagementSection: React.FC<EngagementServiceType> = ({
  title,
  description,
  services,
  buttonText,
  buttonClassName,
}): JSX.Element => (
  <PageSection className="flex flex-col items-center text-center">
    <Heading3
      title={title}
      className="max-w-screen-sm mb-10 text-center lg:mb-5"
    />
    <Text2 className="max-w-3xl px-3 mb-[70px] lg:px-0 lg:mb-9">
      {description}
    </Text2>
    <div>
      <SaasTreeIcon className="hidden w-[56%] mx-auto lg:block" />
      <ul className="relative w-full mb-[70px] xs:grid xs:gap-y-[70px] xs:gap-x-5 lg:grid-cols-2 lg:pt-16 lg:mb-16">
        {services.map((service) => (
          <EngagementListItem key={service.id} {...service} />
        ))}
      </ul>
    </div>
    <div className="flex justify-center">
      <Button
        btnKind="lg"
        title={buttonText}
        icon={<ArrowIcon />}
        iconPosition="right"
        className={cn('w-full justify-center', buttonClassName)}
      />
    </div>
  </PageSection>
);
