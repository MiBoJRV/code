import React from 'react';
import { ProductLifecycleType } from 'src/types';
import { CaseCard, ProductLifecycleListItem } from 'src/components';
import { Heading2, PageSection, Text1 } from 'src/ui-kit';

export const ProductLifecycleStageSection: React.FC<ProductLifecycleType> = ({
  title,
  description,
  features,
  caseStudy,
}): JSX.Element => {
  return (
    <PageSection paddingBottom="pb-[105px]">
      <div className="flex flex-col justify-center mx-auto text-center max-w-full mb-11 lg:mb-14 lg:max-w-[1085px]">
        <Heading2>{title}</Heading2>
        <Text1
          fontSize="text-x2-mob"
          className="mt-8 xs:px-[10px] sm:w-auto lg:mt-10"
        >
          {description}
        </Text1>
      </div>
      <ul className="relative text-center w-full mb-[60px] flex gap-[10px] justify-center items-center flex-wrap xs:gap-5 lg:mb-[119px] lg:flex-nowrap lg:pt-16">
        {features.map((feature) => (
          <ProductLifecycleListItem key={feature.id} {...feature} />
        ))}
      </ul>
      <CaseCard {...caseStudy} />
    </PageSection>
  );
};
