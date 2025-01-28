import React from 'react';
import { ServiceType } from 'src/types';
import { ServiceListItem } from 'src/components';
import { PageSection, Heading3, Text2, Link } from 'src/ui-kit';
import { TreeIcon } from 'src/assets/icons';

export const ServiceSection: React.FC<ServiceType> = ({
  title,
  description,
  features,
  link,
}): JSX.Element => (
  <PageSection className="flex flex-col items-center text-center">
    <Heading3 title={title} className="max-w-screen-sm mb-5 text-center" />
    <Text2 className="max-w-3xl mb-9">{description}</Text2>
    <div>
      <TreeIcon className="hidden w-[81.5%] mx-auto lg:block" />
      <ul className="relative w-full mb-9 xs:grid xs:grid-cols-2 xs:gap-y-7 xs:gap-x-6 lg:grid-cols-4 lg:pt-16 lg:mb-16">
        {features.map((feature) => (
          <ServiceListItem key={feature.id} {...feature} />
        ))}
      </ul>
    </div>
    <Link title="Learn more" href={link} className="mx-auto" />
  </PageSection>
);
